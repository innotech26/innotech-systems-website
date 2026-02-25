<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function show(string $slug)
    {
        $services = $this->serviceCatalog();
        $service = $services[$slug] ?? null;

        if (! $service) {
            abort(404);
        }

        $relatedServices = collect($services)
            ->except($slug)
            ->take(3)
            ->all();

        return view('service-details', compact('service', 'relatedServices'));
    }

    private function serviceCatalog(): array
    {
        return [
            'web-development' => [
                'slug' => 'web-development',
                'title' => 'Web Development',
                'image' => 'https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=1200&q=80',
                'description' => 'We build modern, responsive, and high-performance websites tailored to your business goals. Our web solutions focus on speed, security, and usability so your organization can engage customers and operate efficiently.',
            ],
            'mobile-apps' => [
                'slug' => 'mobile-apps',
                'title' => 'Mobile Apps',
                'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=1200&q=80',
                'description' => 'We develop intuitive cross-platform mobile applications for Android and iOS. From concept to deployment, we focus on user-friendly design, reliable performance, and long-term maintainability.',
            ],
            'desktop-apps' => [
                'slug' => 'desktop-apps',
                'title' => 'Desktop Apps',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80',
                'description' => 'Our desktop software solutions help organizations automate internal operations and improve productivity. We deliver robust, secure, and tailored applications for real business workflows.',
            ],
            'graphic-ui-ux' => [
                'slug' => 'graphic-ui-ux',
                'title' => 'Graphic & UI/UX',
                'image' => 'https://images.unsplash.com/photo-1526498460520-4c246339dccb?auto=format&fit=crop&w=1200&q=80',
                'description' => 'We create compelling visual identities, intuitive interfaces, and effective design systems. Our design work ensures your digital products are both visually strong and easy to use.',
            ],
            'ai-data-analytics' => [
                'slug' => 'ai-data-analytics',
                'title' => 'AI & Data Analytics',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'description' => 'We help organizations use data for smarter decision-making through analytics dashboards, reporting tools, and AI-assisted insights. Our solutions turn raw data into practical business value.',
            ],
            'api-integration' => [
                'slug' => 'api-integration',
                'title' => 'API Integration',
                'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=1200&q=80',
                'description' => 'We connect systems and platforms to streamline operations and reduce manual work. Our API integration services ensure secure, reliable, and scalable data exchange across your tools.',
            ],
            'it-training' => [
                'slug' => 'it-training',
                'title' => 'IT Training',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80',
                'description' => 'We provide practical, hands-on IT training programs that build technical confidence and capability. Training can be customized for teams, institutions, and organizational requirements.',
            ],
            'ict-supply' => [
                'slug' => 'ict-supply',
                'title' => 'ICT Supply',
                'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1200&q=80',
                'description' => 'We supply reliable ICT equipment and support organizations with technology procurement. From computers to networking hardware, we provide quality products and guidance.',
            ],
        ];
    }
}
