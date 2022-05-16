<?php
/** @Entity */

use\Doctrine\ORM\Mapping as ORM;

class Program
{
    // ...

    /**
     * ManyToOne (targetEntity) 
     * JoinColumn (nullable=false)
     */
    private $category;

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }
}