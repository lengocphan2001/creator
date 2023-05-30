<?php

namespace App\Helpers;

class AdminHelper
{
    /**
     *  Get page title
     *
     * @param null $title
     * @return string|null
     */
    public static function getPageTitle($title = null): ?string
    {
        if (!$title) {
            return config('app.name');
        }//end if

        return $title . ' - ' . config('app.name');
    }

    /**
     * Get admin sidebar
     *
     * @return array
     */
    public static function getAdminSidebar(): array
    {
        return [
            [
                'label' => trans('admin.sidebar.dashboard'),
                'icon' => 'bx bx-home-circle',
                'route' => 'dashboard',
            ],
            [
                'label' => 'Dự án',
                'icon' => 'bx bxl-product-hunt',
                'items' => [
                    [
                        'label' => 'Danh sách',
                        'route' => 'projects.index',
                    ],
                    [
                        'label' => 'Tạo mới',
                        'route' => 'projects.create',
                    ],
                    // [
                    //     'label' => 'Phân công dự án',
                    //     'route' => 'projects.assignment',
                    // ],
                ],
            ],
            [
                'label' => 'Đối tác',
                'icon' => 'bx bxs-user-check',
                'items' => [
                    [
                        'label' => 'Danh sách',
                        'route' => 'users.index',
                    ],
                    [
                        'label' => 'Tạo mới',
                        'route' => 'users.create',
                    ],
                ],
            ],
            [
                'label' => 'Nhà sáng tạo',
                'icon' => 'bx bx-file',
                'route' => 'creators.index'
            ],
        ];
    }
}
