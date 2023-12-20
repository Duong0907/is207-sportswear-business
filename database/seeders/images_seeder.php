<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class images_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5a0d2f80-0c67-4914-aac0-645558427422/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png',
                'product_id' => 1
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/77dd9307-78a4-4cab-b2fb-ccd12c782901/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png',
                'product_id' => 1
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d3b21377-be68-49fe-9578-1409dc86f0c1/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png',
                'product_id' => 1
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ed0a6362-d4d0-49df-92a4-9d5339b398d5/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png',
                'product_id' => 1
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/36272c04-343a-4737-8bec-198a4770154e/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png',
                'product_id' => 2
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2ee9d4e5-ffd3-4ac7-ac66-89d56df7afc8/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png',
                'product_id' => 2
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dd3517f9-077a-40ac-939c-d4c74f9cddfc/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png',
                'product_id' => 2
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b3ed8bc6-8747-47b7-b936-a66697c43ff4/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png',
                'product_id' => 2
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/91612184-959a-49c7-a868-5c03d59104eb/dna-mens-dri-fit-basketball-jersey-xtDlbb.png',
                'product_id' => 3
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/62eb0787-1b27-4d0c-80fe-b9c7b5f19ee2/dna-mens-dri-fit-basketball-jersey-xtDlbb.png',
                'product_id' => 3
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/035573b8-4348-4c18-a117-f43544d74a80/dna-mens-dri-fit-basketball-jersey-xtDlbb.png',
                'product_id' => 3
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a7446f2d-1bda-45c7-980f-5ac9197ab3a4/dna-mens-dri-fit-basketball-jersey-xtDlbb.png',
                'product_id' => 3
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/47c78f7d-eb07-4644-b86e-fb24fe96a2ad/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png',
                'product_id' => 4
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/cbbee872-919d-4145-ae9f-4c9de85637af/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png',
                'product_id' => 4
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/a28e0685-77dc-4f86-99a8-3aeb31add5d3/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png',
                'product_id' => 4
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/d917546a-4f58-46ea-8f92-d11d2bf9ff20/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png',
                'product_id' => 4
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a0d80f84-f133-456c-a75e-a99b3900663a/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png',
                'product_id' => 5
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6cb6e89a-c916-419d-b853-6dcb5f9093b9/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png',
                'product_id' => 5
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cb95444c-d083-43fb-9b2b-a66a2f6de837/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png',
                'product_id' => 5
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a10471e5-4bd3-4746-8217-1e49aff48d1f/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png',
                'product_id' => 5
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2ce74b3e-519e-4ea8-a71c-96331b624ddd/sportswear-classic-womens-t-shirt-qNvM9M.png',
                'product_id' => 6
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c1ef9223-04fb-4e83-a068-9f1a9bb9cbc0/sportswear-classic-womens-t-shirt-qNvM9M.png',
                'product_id' => 6
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3c86842c-57e1-4b16-997a-5689dd8257f9/sportswear-classic-womens-t-shirt-qNvM9M.png',
                'product_id' => 6
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/38ebcb2c-07b6-42fc-85de-1aad5323942e/sportswear-classic-womens-t-shirt-qNvM9M.png',
                'product_id' => 6
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/bb367ae8-7562-4d2e-9bf0-9804c7cfd3ce/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png',
                'product_id' => 7
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0c8e6710-062a-4849-9d4f-f14d9c948b9d/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png',
                'product_id' => 7
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4677d36d-c8d2-47eb-b764-d1b00e9e6ec5/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png',
                'product_id' => 7
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/aebc74f2-94e8-4106-8915-9da400bfdac8/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png',
                'product_id' => 7
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/89001e4b-d83d-4610-91e4-09ea6f3a73f5/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png',
                'product_id' => 8
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/bde03a3f-7594-4e17-b8e4-ce2fee6c9149/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png',
                'product_id' => 8
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ed4e1849-1ecf-4499-a6f3-38f57e59f7bb/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png',
                'product_id' => 8
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/fe7121e8-44d9-4768-9652-7be7b0aa4c49/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png',
                'product_id' => 8
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9dcb5029-7910-4645-967c-aed4e8d1e31c/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png',
                'product_id' => 9
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ca089335-b311-4db6-b0c9-2dfe21d67faa/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png',
                'product_id' => 9
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/53bf5a29-f46c-498c-b60a-1ecb5c09fa30/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png',
                'product_id' => 9
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/7f9a7fc8-a269-4d94-b0ea-a602cc34b9d6/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png',
                'product_id' => 9
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/bab05669-297b-41d8-85c4-8cb5cd812aba/little-kids-pullover-hoodie-QZbmXZ.png',
                'product_id' => 10
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/065d9ac7-0436-4ebb-b2f1-11f63e8a086e/little-kids-pullover-hoodie-QZbmXZ.png',
                'product_id' => 10
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0d0e1168-ce90-4604-8806-b6df2e4e3dd1/little-kids-pullover-hoodie-QZbmXZ.png',
                'product_id' => 10
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/312c1529-659c-4021-8e18-19ea42d432d7/little-kids-pullover-hoodie-QZbmXZ.png',
                'product_id' => 10
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/96d22b82-e7a8-4e26-8226-38b552661e85/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png',
                'product_id' => 11
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2e78e0aa-4bbc-4eb0-a615-02fdae5fbf39/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png',
                'product_id' => 11
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0b7dfb1e-21d4-49f6-a03e-c0aa63de4f02/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png',
                'product_id' => 11
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9a91cdca-6470-4d9a-8c9f-e9671202f7ba/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png',
                'product_id' => 11
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ff05e4e2-7af8-4746-ba88-7e3a3a326664/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png',
                'product_id' => 12
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fdb68714-8950-4019-922b-de51ce3e4ef3/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png',
                'product_id' => 12
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/26bd24fd-5940-4cc2-a550-f7579f63481c/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png',
                'product_id' => 12
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5d240504-4518-4cc6-868e-7064c8b8b1b3/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png',
                'product_id' => 12
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_default/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c848e8ca-6e81-4fff-b2f0-bfb9cb4c4071/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png',
                'product_id' => 13
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/199ab3ac-1243-4cc3-882f-34cdcf23f616/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png',
                'product_id' => 13
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/63415bd6-8d08-4e98-815a-2c9f8f0f0e78/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png',
                'product_id' => 13
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/5417300f-b339-4e27-b870-c7cb1fa8903b/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png',
                'product_id' => 13
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/abc95e28-07fd-4723-8497-10a78763dc4a/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png',
                'product_id' => 14
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ccc0c52f-2e45-474b-9ef6-fe338f057289/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png',
                'product_id' => 14
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cbe78a18-4083-439f-9028-ecd7dc1f4237/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png',
                'product_id' => 14
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f7b09fb8-8d6c-4639-9243-ddb022ebf8cd/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png',
                'product_id' => 14
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/495412c6-b708-4584-a392-914009989035/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png',
                'product_id' => 15
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d8447bc3-a619-4537-8439-175d37f03584/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png',
                'product_id' => 15
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c4165ea7-adf6-4439-ab41-d5d25dc4e1a5/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png',
                'product_id' => 15
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a6afee12-4a8e-4677-8b90-b00c9c8821e8/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png',
                'product_id' => 15
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/50568201-14ec-4474-9c91-a934e19c0c0c/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png',
                'product_id' => 16
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3a2b6634-4254-4da9-a8b1-e804e2a484bb/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png',
                'product_id' => 16
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dba55796-2698-4f78-937e-12f989ad0e3e/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png',
                'product_id' => 16
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3fb71066-802e-4e06-bdc4-f72aed1cc4a1/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png',
                'product_id' => 16
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c6de8eec-0369-4c25-bf4b-6ef4b5f29541/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png',
                'product_id' => 17
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4283fd13-d971-4fbf-bf9d-81dfe52dd254/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png',
                'product_id' => 17
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/da9fc8c0-3f1d-4a23-bbcd-2e39f2f7f4af/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png',
                'product_id' => 17
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b75ccc1f-d779-4cff-8b28-6e58c89485a1/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png',
                'product_id' => 17
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/10e27502-d917-4a21-a470-6459d34b71d0/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png',
                'product_id' => 18
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/27e3d8a3-75fe-4208-962f-48e683be3b10/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png',
                'product_id' => 18
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1e271999-7205-45f5-b9e6-c9a9edbdf3d8/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png',
                'product_id' => 18
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/51b6927d-8ced-4885-8d0b-79e126df22af/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png',
                'product_id' => 18
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8011d3c1-e5d8-4003-9d9d-454234d5e2fb/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png',
                'product_id' => 19
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/efab0adf-d57e-4bd1-938e-e314b192fb7b/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png',
                'product_id' => 19
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/32cead04-01f2-4a3b-996a-7aeaabcfb1ba/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png',
                'product_id' => 19
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/256bd70d-592b-4b68-8fc5-15edab7d97d1/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png',
                'product_id' => 19
            ],
            // ------------------------------------------------------------------------------------------
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/75042f4a-ae91-4619-bc95-0125d0344d12/dri-fit-academy23-kids-soccer-shorts-wlb229.png',
                'product_id' => 20
            ], 
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fea14581-6b25-4188-b688-aa071f43b9c5/dri-fit-academy23-kids-soccer-shorts-wlb229.png',
                'product_id' => 20
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1a2ff8e1-372c-4126-b783-ed6e6c5c1b2c/dri-fit-academy23-kids-soccer-shorts-wlb229.png',
                'product_id' => 20
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/bccfcf51-4cfc-4a99-b779-0173891efff5/dri-fit-academy23-kids-soccer-shorts-wlb229.png',
                'product_id' => 20
            ],  
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/41ea45b3-87ca-462e-9660-021c347984e5/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png',
                'product_id' => 21,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c6af1751-81a1-48e2-bbb6-eb1a446aeabd/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png',
                'product_id' => 21,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/886933a6-096d-4147-9e0e-4789e1d7db01/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png',
                'product_id' => 21,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/59160051-0226-4749-b5d4-6d5cc2e9fe26/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png',
                'product_id' => 21,
            ],
            // https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/92802401-677e-41fd-a204-3f4666e3c7b0/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6add830d-ca5f-418d-8ab3-b4191ff5f921/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/87d8bd0e-e05b-4570-ac51-19444487f610/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/7f934e4b-411f-402e-88ff-481c3614f26c/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png

            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/92802401-677e-41fd-a204-3f4666e3c7b0/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png',
                'product_id' => 22,
            ],


            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/92802401-677e-41fd-a204-3f4666e3c7b0/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png',
                'product_id' => 22,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6add830d-ca5f-418d-8ab3-b4191ff5f922/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png',
                'product_id' => 22,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/87d8bd0e-e05b-4570-ac51-19444487f610/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png',
                'product_id' => 22,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/7f934e4b-411f-402e-88ff-481c3614f26c/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png',
                'product_id' => 22,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/766b057f-9403-4f0d-90eb-5be0a1d56b6b/jordan-stadium-90-mens-shoes-q1QWcC.png',
                'product_id' => 23,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/e24dda2d-9e5d-4f1e-8eb9-043a9e082bf7/jordan-stadium-90-mens-shoes-q1QWcC.png',
                'product_id' => 23,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c5327dce-d611-4022-accc-c816c5688e63/jordan-stadium-90-mens-shoes-q1QWcC.png',
                'product_id' => 23,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/f730ba4b-233c-47e3-b8dd-af40e1121ff7/jordan-stadium-90-mens-shoes-q1QWcC.png',
                'product_id' => 23,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c0106eb6-56f2-4c92-b6ff-cb6b7d52d5d5/dunk-mid-mens-shoes-QVrHS8.png',
                'product_id' => 24,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f456f55f-e584-447b-b8fc-d339bbf137d0/dunk-mid-mens-shoes-QVrHS8.png',
                'product_id' => 24,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fb61705c-5c14-41fc-9361-5642f7e6e85d/dunk-mid-mens-shoes-QVrHS8.png',
                'product_id' => 24,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cfef550d-f411-4b4a-9103-7e5d1d3da9cb/dunk-mid-mens-shoes-QVrHS8.png',
                'product_id' => 24,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/29a93e9c-0279-47c8-abc3-9f7a2f475c88/air-force-1-07-mens-shoes-J7xw5P.png',
                'product_id' => 25,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/61ec300a-da70-445c-b932-45248a3b8221/air-force-1-07-mens-shoes-J7xw5P.png',
                'product_id' => 25,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4474fa3e-a2be-444d-b447-12ee1c26ec9b/air-force-1-07-mens-shoes-J7xw5P.png',
                'product_id' => 25,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a01db1d3-b82c-4d71-b278-43d98438e6e8/air-force-1-07-mens-shoes-J7xw5P.png',
                'product_id' => 25,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0e0024e4-434f-48c1-98a3-d9238a788b01/mc-trainer-2-mens-workout-shoes-21vH06.png',
                'product_id' => 26,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cebf161b-4adf-410a-b5ac-3b638c44ceb0/mc-trainer-2-mens-workout-shoes-21vH06.png',
                'product_id' => 26,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/50f630f7-18ae-4e04-b122-94bf9e5a353e/mc-trainer-2-mens-workout-shoes-21vH06.png',
                'product_id' => 26,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/35d5c78c-5c90-411f-9ea4-c19971f95004/mc-trainer-2-mens-workout-shoes-21vH06.png',
                'product_id' => 26,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e138e089-db7c-4172-becf-3218c183339b/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png',
                'product_id' => 27,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/22c7878d-fcbc-47d4-8cf9-6fffb68ebdd9/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png',
                'product_id' => 27,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c71adb15-e858-4ac4-82d2-e4b63101c10d/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png',
                'product_id' => 27,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fb1975d2-9994-4375-a25e-4e080a9dfc97/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png',
                'product_id' => 27,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/722ca0dd-e0f7-444e-afb3-2322e990e890/air-jordan-1-brooklyn-womens-boots-kd9QhX.png',
                'product_id' => 28,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/b4031133-af87-43cc-925b-216d00e60678/air-jordan-1-brooklyn-womens-boots-kd9QhX.png',
                'product_id' => 28,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/137c0fcb-7687-4484-8822-9df058da6881/air-jordan-1-brooklyn-womens-boots-kd9QhX.png',
                'product_id' => 28,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/8ed6ea56-d350-412e-8216-dc4809dfd979/air-jordan-1-brooklyn-womens-boots-kd9QhX.png',
                'product_id' => 28,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/dc52f2d9-759e-496c-9421-6fa2eb86701a/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png',
                'product_id' => 29,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/82080a80-ff02-45e5-8fa4-be568344f0e2/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png',
                'product_id' => 29,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/d486c68c-690c-4421-96b0-f38ce7598b99/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png',
                'product_id' => 29,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c8822c26-918a-444a-b8c5-8eb366cd3c94/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png',
                'product_id' => 29,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/519b2b47-807e-4abf-917e-95ad69d219de/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png',
                'product_id' => 30,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/93c19ed7-9abb-4a72-94c3-e3f5d32b66e3/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png',
                'product_id' => 30,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/1bb24e26-087e-46f5-b4d4-b345d8cfd654/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png',
                'product_id' => 30,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/2280a733-20b7-43c7-98ba-b572e40b8352/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png',
                'product_id' => 30,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/40011822-48aa-4c58-a9a1-c0205de06ac9/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png',
                'product_id' => 31,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ab920e6f-29e0-4b2b-8314-b865ff21b56c/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png',
                'product_id' => 31,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1f046274-1493-4756-93be-1552c335a1ed/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png',
                'product_id' => 31,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e90aa244-d511-4ffb-9bd2-04e583019b86/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png',
                'product_id' => 31,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2ae8e66a-c0bd-4afd-9e95-eb1dbd9d9cb0/kiger-9-womens-trail-running-shoes-bsbcr4.png',
                'product_id' => 32,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fbbf025d-fba6-4735-b766-d8930595ae23/kiger-9-womens-trail-running-shoes-bsbcr4.png',
                'product_id' => 32,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/74e65d56-a483-4963-8c85-f0bca6858d50/kiger-9-womens-trail-running-shoes-bsbcr4.png',
                'product_id' => 32,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9e39b00b-82ef-4a31-b076-fe5f46548b27/kiger-9-womens-trail-running-shoes-bsbcr4.png',
                'product_id' => 32,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ebaca0dd-fcb8-49ce-91f1-6adefef2a6ea/ja-1-backyard-bbq-big-kids-basketball-shoes-VpT9wB.png',
                'product_id' => 33,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/76ce6993-bb08-40b8-8664-3c2649091f7e/ja-1-backyard-bbq-big-kids-basketball-shoes-VpT9wB.png',
                'product_id' => 33,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/36ed6dbe-5c97-4d6b-933b-e21271a2eadb/ja-1-backyard-bbq-big-kids-basketball-shoes-VpT9wB.png',
                'product_id' => 33,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/78eb299d-26c8-4a80-8622-6397f3a2f40a/tatum-1-little-kids-shoes-srqCM0.png',
                'product_id' => 34,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ddbdd177-4fd8-4016-aaac-b41cc83bd186/tatum-1-little-kids-shoes-srqCM0.png',
                'product_id' => 34,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/617a8094-684a-4bc8-a2a4-98497177e2e0/tatum-1-little-kids-shoes-srqCM0.png',
                'product_id' => 34,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/db2f00b6-292a-403d-9e0c-a1ac8d528b7d/tatum-1-little-kids-shoes-srqCM0.png',
                'product_id' => 34,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/30ddbe18-076a-4734-9ad4-383004ab4799/lebron-witness-7-little-kids-shoes-CT9KvM.png',
                'product_id' => 35,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/08cbc122-1961-464b-8f90-e3ef326c02a6/lebron-witness-7-little-kids-shoes-CT9KvM.png',
                'product_id' => 35,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/23d74289-dc13-4119-9383-151338695964/lebron-witness-7-little-kids-shoes-CT9KvM.png',
                'product_id' => 35,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3385e78f-a1df-4367-a9cd-3f20885a44a7/lebron-witness-7-little-kids-shoes-CT9KvM.png',
                'product_id' => 35,
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6477c54c-172d-4e85-8b51-08ac89e421e3/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png',
                'product_id' => 36
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/22567a5a-2511-4626-bc04-f72104c1da50/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png',
                'product_id' => 36
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/88fb71bf-ca57-4cf3-98df-727baf0142cf/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png',
                'product_id' => 36
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/863c9aed-6a67-4776-8372-5ab5d7216fe5/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png',
                'product_id' => 36
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/35c348b9-8a7b-4ef3-8772-4bed7f7ef6ae/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png',
                'product_id' => 37
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e5bc86bd-b190-4ca0-8547-2416b1e4dca7/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png',
                'product_id' => 37
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/712594ad-2e6b-483d-9720-8196a3bf245a/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png',
                'product_id' => 37
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e99faa44-604e-4f13-8240-df8fde2575a9/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png',
                'product_id' => 37
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5364bd0f-e90b-4449-a22c-341f490ac2ce/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png',
                'product_id' => 38
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0cdde54e-965c-4baa-8e66-af2e8a445f4d/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png',
                'product_id' => 38
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d12bea0b-4bd5-42f4-807e-3b7a0c115890/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png',
                'product_id' => 38
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dfc6bcde-f384-4ab6-8220-6c5de2d57909/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png',
                'product_id' => 38
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9c734410-bd8a-4ebc-923f-e9d5659c51bb/elite-crew-basketball-socks-zGJxZD.png',
                'product_id' => 39
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/24f335e6-7eae-4572-8188-e211516a10a3/elite-crew-basketball-socks-zGJxZD.png',
                'product_id' => 39
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2599f181-8e34-42f2-9945-bf52bf954451/elite-crew-basketball-socks-zGJxZD.png',
                'product_id' => 39
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fb23cfa0-82f7-4282-984d-b11b8d37aa27/elite-crew-basketball-socks-zGJxZD.png',
                'product_id' => 39
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1772bc06-d182-4cf3-b897-421d3f70edeb/multiplier-crew-sock-2-pairs-428jJv.png',
                'product_id' => 40
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9a9cf967-ad78-470a-9b38-7e2ddb532992/multiplier-crew-sock-2-pairs-428jJv.png',
                'product_id' => 40
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d177755f-e016-4f71-aeb4-47f8f659103f/multiplier-crew-sock-2-pairs-428jJv.png',
                'product_id' => 40
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/43158641-bf36-4f7a-a8b9-92181e1160a6/multiplier-crew-sock-2-pairs-428jJv.png',
                'product_id' => 40
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d72ead2e-4e84-42e2-bd7a-88a75e5daa73/everyday-lightweight-training-no-show-socks-4jbnKn.png',
                'product_id' => 41
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cc76f984-b15a-44ff-ab1e-c0a58b31ab7d/everyday-lightweight-training-no-show-socks-4jbnKn.png',
                'product_id' => 41
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9612bb0e-57f6-4937-88df-5f7851463b8b/everyday-lightweight-training-no-show-socks-4jbnKn.png',
                'product_id' => 41
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ae86acf9-f88f-4c41-8724-b35df2628fd5/everyday-lightweight-training-no-show-socks-K5cbcM.png',
                'product_id' => 42
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/99d3da7e-d046-492c-8777-1201f04a59e2/everyday-lightweight-training-no-show-socks-K5cbcM.png',
                'product_id' => 42
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ee974df9-8aaf-4d04-8e57-9fbd1d3ecc97/everyday-lightweight-training-no-show-socks-K5cbcM.png',
                'product_id' => 42
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1a73c0a9-63b1-457f-970a-a95c544abbfb/everyday-lightweight-training-no-show-socks-K5cbcM.png',
                'product_id' => 42
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dcf95f2c-4f09-43c1-9668-021727abc780/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 43
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6d9e4894-cf65-4d66-9d2e-61faa98f8008/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 43
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/61f62d6f-d7f4-4520-874c-e17af78e1317/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 43
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4057f950-dfcb-44e8-841f-3c104d454daf/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 43
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/413bf806-b071-46fc-a859-224df5da26d1/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 44
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ed34d45c-6135-4a9f-9f9d-02eb23d21f40/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 44
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/e1e82c86-a723-45c0-8764-5405861daaef/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 44
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/3c416255-3ad1-49b1-8390-ad1070a5b39f/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 44
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d72ead2e-4e84-42e2-bd7a-88a75e5daa73/everyday-lightweight-training-no-show-socks-4jbnKn.png',
                'product_id' => 45
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cc76f984-b15a-44ff-ab1e-c0a58b31ab7d/everyday-lightweight-training-no-show-socks-4jbnKn.png',
                'product_id' => 45
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9612bb0e-57f6-4937-88df-5f7851463b8b/everyday-lightweight-training-no-show-socks-4jbnKn.png',
                'product_id' => 45
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dcf95f2c-4f09-43c1-9668-021727abc780/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 46
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6d9e4894-cf65-4d66-9d2e-61faa98f8008/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 46
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/61f62d6f-d7f4-4520-874c-e17af78e1317/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 46
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4057f950-dfcb-44e8-841f-3c104d454daf/everyday-plus-cushioned-crew-socks-L8M4HC.png',
                'product_id' => 46
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/413bf806-b071-46fc-a859-224df5da26d1/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 47
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ed34d45c-6135-4a9f-9f9d-02eb23d21f40/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 47
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/e1e82c86-a723-45c0-8764-5405861daaef/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 47
            ],
            [
                'image_link' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/3c416255-3ad1-49b1-8390-ad1070a5b39f/jordan-everyday-ankle-socks-PqW8xF.png',
                'product_id' => 47
            ],
        ]);
    }
}