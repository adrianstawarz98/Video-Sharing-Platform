<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 * @ORM\Table (name="comments")
 * @ORM\HasLifecycleCallbacks()
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity=User::class,inversedBy="comments")
     * @ORM\JoinColumn(nullable=false, name="user_id",
     * referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Video::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false, name="video_id",
     * referencedColumnName="id", onDelete="CASCADE")
     */
    private $video;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function setVideo(?Video $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @ORM\PrePersist()
     */
    public function setCreatedAt(): ?self
    {
     if(isset($this->created_at2)) $this->created_at = $this->created_at2;

     else $this->created_at = new DateTime();
     return $this;
    }
    public function setCreatedAtForFixtures($created_at): ?self
    {
        $this->created_at2 = $created_at;

        return $this;
    }
}
