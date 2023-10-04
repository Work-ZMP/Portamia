<?php
/*
Template Name: Applications 

*/
?>
<?php get_header(); ?>

 <?php 
                $queried_object = get_queried_object(); 
                $taxonomy = $queried_object->taxonomy;
                $term_id = $queried_object->term_id;  
                  ?>
<div class="list_all">
    <div class="list_wrapper">
 <?php $argsitems = array(
             'post_type' => 'sales',
             'orderby' => 'menu_order', 
             'order' => 'ASC'
             );
             $q = new WP_Query($argsitems);
             $num = 1; ?>
             <div class="list_wrapper_one_start">
                         <div class="list_wrapper_one_mu">
                            Порядковый номер
                        </div>    
                        <div class="list_wrapper_one_id">
                          ID заявки
                        </div>    
                        <div class="list_wrapper_one_name">
                            Наименование заявки
                        </div>    
                        <div class="list_wrapper_one_date_create">
                            Дата создания
                        </div>    
                          <div class="list_wrapper_one_date_last_user">
                            Пользователь
                        </div>    
                        <div class="list_wrapper_one_date_last_status">
                            Дата передачи на обработку
                        </div>    
                        <div class="list_wrapper_one_date_action">
                            Действия
                        </div>    
                        <?php 
                            
                           
                        ?>
                    </div>
             <?php while( $q->have_posts() ) : $q->the_post(); ?>
                    <div class="list_wrapper_one">
                        <?php $idsk = get_the_id(); ?>
                        <div class="list_wrapper_total">
                        <div class="list_wrapper_one_mu">
                            <?php echo $num; ?>
                        </div>    
                        <div class="list_wrapper_one_id">
                            
                            <?php echo $idsk; ?>
                        </div>    
                        <div class="list_wrapper_one_name">
                            <?php  echo get_the_title($idsk); ?>
                        </div>    
                        <div class="list_wrapper_one_date_create">
                             <?php the_date('F j, Y в G:i'); ?>
                        </div>    
                        <div class="list_wrapper_one_date_last_user">
                            Ivanov
                        </div>    
                        <div class="list_wrapper_one_date_last_status">
                            22.07.2023
                        </div>    
                        <div class="list_wrapper_one_date_action">
                            <a href="#" data-edit="<?php echo $idsk; ?>" data-usr="1" class="edits">Редактировать</a>
                          
                        </div>
                        </div>
                        <div class="result_ajx dataajx<?php echo $idsk; ?>"></div>
                    </div>
                     
             
<?php $num++; endwhile;?>
        </div>    
</div>    
<?php get_footer(); ?>