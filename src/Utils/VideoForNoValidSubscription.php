<?php


namespace App\Utils;
use App\Entity\Video;
use Symfony\Component\Security\Core\Security;

class VideoForNoValidSubscription
{
    public $isSubscriptionValid = false;

    public function __construct(Security $security){
        $user = $security->getUser();
        if($user && $user->getSubscription() != null)
        {
            $payment_status = $user->getSubscription()->getPaymentStatus();
            $valid = new \DateTime() < $user->getSubscription()->getValidTo();
            if($payment_status != null && $valid)
            {
                $this->isSubscriptionValid = true;
            }
        }
    }
    public function check(): ?int
    {
        if($this->isSubscriptionValid)
        {
            return null;
        }
        else
        {
            static $video = Video::VideoNotLoggedInOrNoMembers;
            return $video;
        }
    }
}