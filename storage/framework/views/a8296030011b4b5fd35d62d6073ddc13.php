


   <aside class="blog-sidebar">
                        
                        <!-- Search Widget -->
                        <div class="sidebar-widget widget-search">
                            <h4 class="widget-title">Search</h4>
                            <form action="<?php echo e(route('blogSearch')); ?>" class="sidebar-search-form">
                                <input type="text" name="search" value="<?php echo e(request()->search); ?>" placeholder="Search keywords..." class="form-control">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget widget-categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="category-list">
                                	<?php $__currentLoopData = App\Models\Attribute::where('type',6)->where('status','active')->where('parent_id',null)->orderBy('name')->limit(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href=" href="<?php echo e(route('blogTag',$tag->slug)); ?>""><?php echo e($tag->name); ?></a></li>
                                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget widget-recent-posts">
                            <h4 class="widget-title">Recent Posts</h4>
                            	<?php $__currentLoopData = App\Models\Post::where('type',1)->where('status','active')->latest()->limit(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="recent-post-list">
                                
                                <a href="<?php echo e(route('blogView',$lPost->slug?:'no-title')); ?>"" class="recent-post-item">
                                    <div class="recent-post-img">
                                        <img src="<?php echo e(asset($lPost->image())); ?>" alt="Post thumbnail">
                                    </div>
                                    <div class="recent-post-info">
                                        <h5><a href="#"><?php echo e($lPost->name); ?></a></h5>
                                        <span class="recent-post-date"><i class="fa-regular fa-calendar-days"></i> <?php echo e($lPost->created_at->format('d-m-Y')); ?></span>
                                    </div>
                                </a>
                                
                              
                            </div>
                            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Popular Tags Widget -->
                        <!-- Popular Tags Widget -->
                        <div class="sidebar-widget widget-tags">
                            <h4 class="widget-title">Popular Tags</h4>
                            <div class="tag-cloud">
                                <a href="#">Apparel</a>
                                <a href="#">Garment</a>
                                <a href="#">Sourcing</a>
                                <a href="#">Quality</a>
                                <a href="#">Export</a>
                                <a href="#">Bangladesh</a>
                                <a href="#">Retail</a>
                            </div>
                        </div>

                        <!-- Contact Banner Widget -->
                        <div class="sidebar-widget widget-contact-banner text-center">
                            <h4 class="banner-title">Need Apparel Sourcing?</h4>
                            <p class="banner-text">Get premium quality garments from trusted manufacturers in Bangladesh.</p>
                            <a href="/contact-us" class="btn btn-coral banner-btn">Contact Us Now</a>
                        </div>

                    </aside>
<?php /**PATH /home/nithostrb/public_html/nuvesta.nit.hostrb.com/resources/views/welcome/blogs/includes/sideBar.blade.php ENDPATH**/ ?>