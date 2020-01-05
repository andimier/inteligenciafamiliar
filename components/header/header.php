<?php
    class Header {
        private static function getImageInfo() {
            global $connection;

            $q = "SELECT * FROM noticias ORDER BY fecha DESC LIMIT 1";
            $r = mysqli_query($connection, $q);
            $data = [];

            while ($img = mysqli_fetch_array($r)) {
                $data = [
                    'image' => $img['imagen1'],
                    'title' => $img['titulo']
                ];
            }

            return $data;
        }

        private static function getArticleTitles() {
            global $connection;

            $articleTitles = [];

            $q = "SELECT * FROM contenidos WHERE seccion_id = 1 AND contenido_id = 8";
            $r = mysqli_query($connection, $q);

            while ($art = mysqli_fetch_array($r)) {
                array_push($articleTitles, $art['titulo']);
            }

            return $articleTitles;
        }

        static public function getHeaderData() {
            $data = [
                'imageInfo' => self::getImageInfo(),
                'articlesTitles' => self::getArticleTitles()
            ];

            return $data;
        }
    }

    $headerData = Header::getHeaderData();
?>