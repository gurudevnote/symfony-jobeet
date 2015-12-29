<?php

namespace JoBeetBundle\Controller;

use JoBeetBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Category controller.
 *
 * @Route("/category")
 */
class CategoryController extends Controller
{
    /**
     * @Route(name="job_category", path="/{slug}")
     */
    public function showAction(Category $category)
    {

    }
}
