<?php

namespace App\EntityListener;

use App\Entity\Conference;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class ConferenceEntityListener
{
    public function __construct(
        private SluggerInterface $slugger,
    )
    {
    }

    public function prePersist(Conference $conference, LifecycleEventArgs $event) {
        $conference->computeSlug($this->slugger);
    }

    public function preUpdate(Conference $conference, LifecycleEventArgs $event)
    {
        $conference->computeSlug($this->slugger);
    }
}
