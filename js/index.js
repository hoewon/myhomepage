require(['jquery', 'search', 'gotop'], function($,search){
     $(function(){
          $('.blog-cate a').on('click',function(){
               $(this).parent().siblings().children('a').removeClass('active');
               $(this).addClass('active');
               var cateId = $(this).data('id');
               var $blogList=$('.blog-list');
               $.get('welcome/get_blogs',{cateId:cateId},function(data){
                    $('.blog-list').empty();
                    var html = '';
                    for(var i =0;i<data.length;i++){
                         var blog  = data[i];
                         html +=`
                    <li class="blog">
                             <a href="#">
                                  <img src="`+blog.img+`" alt="">
                                       <div class="blog-desc">
                                       <p class="blog-title">`+blog.title+`</p>
                                        <span class="blog-clicked">`+blog.clicked+`</span>
                                   </div>
                                   <div class="mask">
                                       <h3 class="mask-title">PHOTO</h3>
                                       <span class="mask-btn">VIEW PHOTO</span>
                                   </div>
                              </a>
                         </li>`;
                    }
                    $blogList.append(html);
               },'json');
          });
     });
});