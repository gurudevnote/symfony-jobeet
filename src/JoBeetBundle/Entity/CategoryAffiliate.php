<?php

namespace JoBeetBundle\Entity;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \JoBeetBundle\Entity\Category
     */
    private $category;

    /**
     * @var \JoBeetBundle\Entity\Affiliate
     */
    private $affiliate;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \JoBeetBundle\Entity\Category $category
     *
     * @return CategoryAffiliate
     */
    public function setCategory(\JoBeetBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \JoBeetBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set affiliate
     *
     * @param \JoBeetBundle\Entity\Affiliate $affiliate
     *
     * @return CategoryAffiliate
     */
    public function setAffiliate(\JoBeetBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate
     *
     * @return \JoBeetBundle\Entity\Affiliate
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}
