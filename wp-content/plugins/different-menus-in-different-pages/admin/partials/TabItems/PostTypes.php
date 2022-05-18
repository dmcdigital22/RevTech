<?php

namespace TabItems\PostTypes;

use TabOrganizer;

class TabItem extends tabOrganizer{
    
    public $name = "Post Types";
    public $singularName = "Post Type";
    public $lowerCaseTabName = 'post_type';
    public $buttonId = 'post_type';
    public $tabClassName = "";
    public $priority = 60;

    public function tabData(){
        $posts_per_page = $this->posts_per_page;
        $post_types =  get_post_types( array( 'public' => true ) );
        unset( $post_types['page'] );
        $post_types = array_map( 'get_post_type_object', $post_types );

        ob_start();
        ?>
        <div class="tab_container">
            <ul class="nav nav-pills nav-fill navtop border-bottom mb-2">
                <?php
                $output = "";
                foreach( $post_types as $key => $post_type ) {
                    $checkboxs  = '<input type="checkbox" name="post_type[' . $key . ']"  /> ';

                    $active_class= ($key == "post")?"active": "";

                    if ($key !== "attachment") {
                        $output .= '<li class="nav-item"><a href="#visibility-tab-' . $key . '" class="nav-link  ' . $active_class .'" data-toggle="tab">' . $post_type->label . '</a></li>';
                    }
                }

                echo $output;
                ?>
            </ul>
            <div class="tab-content">
                <?php

                $output = "";
                foreach( $post_types as $key => $post_type ) {

                    $active_class = ($key == "post")?"active": "";
                    $output .= '<div id="visibility-tab-'. $key .'" post_type="'.$key.'" class="tab-pane '.$active_class.' clearfix" role="tabpanel">';
                    $output .= '<div id="tab-items" class="tab-items-post_type">';

                    $posts = get_posts( array(
                        'posts_per_page' => $posts_per_page,
                        'post_type'        => $key,
                        'post_status'      => 'publish',
                        'orderby' => 'post_title',
                        'order' => 'ASC'
                    ) );

                    $all_post = get_posts( array(
                        'posts_per_page' => -1,
                        'post_type'        => $key,
                        'post_status'      => 'publish',
                        'orderby' => 'post_title',
                        'order' => 'ASC'
                    ) );

                    $i                   = 1;
                    //$page_id             = 1;
                    $num_of_single_pages = count( $all_post );
                    $num_of_pages        = (int) ceil( $num_of_single_pages / $posts_per_page );

                    if( ! empty( $posts ) ) : foreach( $posts as $post ) :
                        $output .= '<label><input type="checkbox" name="post_type['. $key .']['. $post->ID .']"  /><span class="label_title">' . $post->post_title . '</span><span class="diff_permalink">'.get_permalink($post->ID).'</span></label>';
                    endforeach;
                        if ( $num_of_pages > 1 ) {
                            $output .= '<ul class="pagination pagination-sm" style="float: left;position: relative;bottom: -20px;clear: left;">';
                            $output .= $this->create_page_pagination( 1, $num_of_pages );
                            $output .= '</ul>';
                        }
                    endif;

                    $output .= '</div></div>';
                }

                echo $output;

                ?>

            </div>
        </div>
        <?php
        $output = ob_get_clean();
        
        return $output;
    }
}
