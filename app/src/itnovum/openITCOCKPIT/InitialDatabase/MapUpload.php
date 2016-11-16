<?php
// Copyright (C) <2015>  <it-novum GmbH>
//
// This file is dual licensed
//
// 1.
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, version 3 of the License.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// 2.
//  If you purchased an openITCOCKPIT Enterprise Edition you can use this file
//  under the terms of the openITCOCKPIT Enterprise Edition license agreement.
//  License agreement and license key will be shipped with the order
//  confirmation.

namespace itnovum\openITCOCKPIT\InitialDatabase;


class MapUpload extends Importer {
    /**
     * @property \Systemsetting $Model
     */

    /**
     * @return bool
     */
    public function import() {
        if($this->isTableEmpty()){
            $data = $this->getData();
            foreach($data as $record){
                $this->Model->create();
                $this->Model->saveAll($record);
            }
        }
        return true;
    }

    /**
     * @return array
     */
    public function getData() {
        return [
            [
                'MapUpload' =>
                    [
                        'id' => '1',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_128px',
                        'saved_name' => 'arrows_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '2',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_16px',
                        'saved_name' => 'arrows_16px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '3',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_32px',
                        'saved_name' => 'arrows_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '4',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_64px',
                        'saved_name' => 'arrows_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '5',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_h_128px',
                        'saved_name' => 'arrows_h_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '6',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_h_16px',
                        'saved_name' => 'arrows_h_16px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '7',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_h_32px',
                        'saved_name' => 'arrows_h_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '8',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_h_64px',
                        'saved_name' => 'arrows_h_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '9',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_v_128px',
                        'saved_name' => 'arrows_v_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '10',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_v_16px',
                        'saved_name' => 'arrows_v_16px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '11',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_v_32px',
                        'saved_name' => 'arrows_v_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '12',
                        'upload_type' => '2',
                        'upload_name' => 'arrows_v_64px',
                        'saved_name' => 'arrows_v_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '13',
                        'upload_type' => '2',
                        'upload_name' => 'file_128px',
                        'saved_name' => 'file_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '14',
                        'upload_type' => '2',
                        'upload_name' => 'file_16px',
                        'saved_name' => 'file_16px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '15',
                        'upload_type' => '2',
                        'upload_name' => 'file_32px',
                        'saved_name' => 'file_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '16',
                        'upload_type' => '2',
                        'upload_name' => 'file_64px',
                        'saved_name' => 'file_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '17',
                        'upload_type' => '2',
                        'upload_name' => 'file_text_128px',
                        'saved_name' => 'file_text_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '18',
                        'upload_type' => '2',
                        'upload_name' => 'file_text_16px',
                        'saved_name' => 'file_text_16px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '19',
                        'upload_type' => '2',
                        'upload_name' => 'file_text_32px',
                        'saved_name' => 'file_text_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '20',
                        'upload_type' => '2',
                        'upload_name' => 'file_text_64px',
                        'saved_name' => 'file_text_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '21',
                        'upload_type' => '2',
                        'upload_name' => 'globe_128px',
                        'saved_name' => 'globe_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '22',
                        'upload_type' => '2',
                        'upload_name' => 'globe_16px',
                        'saved_name' => 'globe_16px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '23',
                        'upload_type' => '2',
                        'upload_name' => 'globe_32px',
                        'saved_name' => 'globe_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '24',
                        'upload_type' => '2',
                        'upload_name' => 'globe_64px',
                        'saved_name' => 'globe_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '25',
                        'upload_type' => '2',
                        'upload_name' => 'missing',
                        'saved_name' => 'missing',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '26',
                        'upload_type' => '2',
                        'upload_name' => 'std_big_128px',
                        'saved_name' => 'std_big_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '27',
                        'upload_type' => '2',
                        'upload_name' => 'std_mid_64px',
                        'saved_name' => 'std_mid_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '28',
                        'upload_type' => '2',
                        'upload_name' => 'std_mini_32px',
                        'saved_name' => 'std_mini_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '29',
                        'upload_type' => '2',
                        'upload_name' => 'tile_lg_128px',
                        'saved_name' => 'tile_lg_128px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '30',
                        'upload_type' => '2',
                        'upload_name' => 'tile_md_64px',
                        'saved_name' => 'tile_md_64px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '31',
                        'upload_type' => '2',
                        'upload_name' => 'tile_s_32px',
                        'saved_name' => 'tile_s_32px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],
            [
                'MapUpload' =>
                    [
                        'id' => '32',
                        'upload_type' => '2',
                        'upload_name' => 'tile_xs_16px',
                        'saved_name' => 'tile_xs_16px',
                        'user_id' => NULL,
                        'container_id' => '1',
                        'created' => '0000-00-00 00:00:00',
                    ],
            ],

        ];
    }
}
