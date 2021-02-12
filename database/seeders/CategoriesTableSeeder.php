<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    private function setCategories($categories, $code, $catId)
    {
        if (is_array($categories) and isset($categories[$code]['subcategories'])) {
            foreach ($categories[$code]['subcategories'] as $subCategoryCode => $subCategoryInfo) {
                $cat = new Category();
                $cat->name = $subCategoryInfo['name'];
                $cat->code = $subCategoryCode;
                $cat->description = $subCategoryInfo['description'];
                $cat->sort = $subCategoryInfo['sort'];
                $cat->parent_category_id = $catId;
                $cat->save();
                $this->SetCategories($categories[$code]['subcategories'], $subCategoryCode, $cat->id);
            }
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'estate' => [
                'name' => 'Real Estate',
                'description' => 'Real Estate description',
                'sort' => 100,
                'subcategories' => [
                    'estate_for_rent' => [
                        'name' => 'Real Estate for Rent',
                        'description' => 'Real Estate for Rent description',
                        'sort' => 100,
                        'subcategories' => [
                            'apartments_for_rent' => [
                                'name' => 'Apartments for Rent',
                                'description' => 'Apartments for Rent description',
                                'sort' => 100
                            ],
                            'rooms_for_rent' => [
                                'name' => 'Rooms for Rent',
                                'description' => 'Rooms for Rent description',
                                'sort' => 200
                            ],
                            'houses_for_rent' => [
                                'name' => 'Houses For Rent',
                                'description' => 'Houses For Rent description',
                                'sort' => 300
                            ],
                        ]
                    ],
                    'estate_for_sale' => [
                        'name' => 'Real Estate for Sale',
                        'description' => 'Real Estate for Sale description',
                        'sort' => 200,
                        'subcategories' => [
                            'apartments_for_sale' => [
                                'name' => 'Apartments for Sale',
                                'description' => 'Apartments for Sale description',
                                'sort' => 100,
                                'subcategories' => [
                                    'secondary_real_estate' => [
                                        'name' => 'Secondary Real Estate for Sale',
                                        'description' => 'Secondary Real Estate for Sale description',
                                        'sort' => 100
                                    ],
                                    'new_buildings' => [
                                        'name' => 'New Buildings for Sale',
                                        'description' => 'New Buildings for Sale description',
                                        'sort' => 200
                                    ]
                                ]
                            ],
                            'rooms_for_sale' => [
                                'name' => 'Rooms for Sale',
                                'description' => 'Rooms for Sale description',
                                'sort' => 200
                            ],
                            'houses_for_sale' => [
                                'name' => 'Houses For Sale',
                                'description' => 'Houses For Sale description',
                                'sort' => 300
                            ],
                        ]
                    ]
                ]
            ],
            'vehicles' => [
                'name' => 'Vehicles',
                'description' => 'Vehicles description',
                'sort' => 200,
                'subcategories' => [
                    'cars' => [
                        'name' => 'Cars',
                        'description' => 'Cars description',
                        'sort' => 100
                    ],
                    'motorcycles' => [
                        'name' => 'Motorcycles',
                        'description' => 'Motorcycles description',
                        'sort' => 200
                    ]
                ]
            ],
            'electronics' => [
                'name' => 'Electronics',
                'description' => 'Electronics description',
                'sort' => 300,
                'subcategories' => [
                    'audio_and_video' => [
                        'name' => 'Audio & Video',
                        'description' => 'Audio & Video description',
                        'sort' => 100,
                        'subcategories' => [
                            'tv' => [
                                'name' => 'TV',
                                'description' => 'TV description',
                                'sort' => 100
                            ],
                            'audio' => [
                                'name' => 'Audio',
                                'description' => 'Audio description',
                                'sort' => 200
                            ]
                        ]
                    ],
                    'mobiles' => [
                        'name' => 'Mobiles',
                        'description' => 'Mobiles description',
                        'sort' => 200
                    ],
                    'gadgets' => [
                        'name' => 'Gadgets',
                        'description' => 'Gadgets description',
                        'sort' => 300
                    ]
                ]
            ]
        ];
        foreach ($categories as $code => $categoryInfo) {
            $cat = new Category();
            $cat->name = $categoryInfo['name'];
            $cat->code = $code;
            $cat->description = $categoryInfo['description'];
            $cat->sort = $categoryInfo['sort'];
            $cat->save();
            $this->setCategories($categories, $code, $cat->id);
        }
    }
}
