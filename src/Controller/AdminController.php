<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    #[Route('/customers', name: 'admin_customers')]
    public function customers(): Response
    {
        return $this->render('admin/customer.html.twig');
    }

    #[Route('/bookings', name: 'admin_bookings')]
    public function bookings(): Response
    {
        return $this->render('admin/bookings.html.twig');
    }

    #[Route('/stations', name: 'admin_stations')]
    public function stations(): Response
    {
        return $this->render('admin/stations.html.twig');
    }
}