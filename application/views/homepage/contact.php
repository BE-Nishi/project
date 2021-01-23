      
        <!-- contact section starts
================================================== -->
<section id="contact" class="dtr-section dtr-mb-minus60">
            <div class="container"> 
              <!--== row starts ==-->
                <div class="row dtr-box dtr-rounded bg-blue color-white dtr-mx-0"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-5">
                        <h2>Get in touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        <h4 class="dtr-mt-30">Do not hesitate!</h4>
                        <p class="text-size-md font-weight-extrabold"><span class="color-blue">t:</span> 1 800 23 45 6789</p>
                        <p>
                        <p class="text-size-md font-weight-extrabold"><span class="color-blue">e:</span> hello@example.com</p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-7 small-device-space"> 
                        
                        <!-- form starts -->
                        <div class="dtr-form">
                            <form id="contactform" action="<?php echo base_url()?>project/index.php/main_page/data_send_to_database"  method="post">
                                <fieldset>
                                   <!-- form two columns start -->
                                    <div class="dtr-form-row dtr-form-row-2col clearfix">
                                        <div class="dtr-form-column">
                                            <p class="dtr-form-field">
                                                <input name="name"  type="text" placeholder="Name">
                                        </p>
                                        <?php echo form_error('name'); ?>
                                        </div>
                                        <div class="dtr-form-column">
                                            <p class="dtr-form-field">
                                                <input name="email" type="text" placeholder="Email">
                                            </p>
                                            <?php echo form_error('email'); ?>
                                        </div>
                                    </div>
                                    <!-- form two columns ends -->
                                    
                                    <p class="dtr-form-field">
                                        <input name="subject"  type="text" placeholder="Subject">
                                     </p>
                                     <?php echo form_error('subject'); ?></textarea>
                                    <p class="antispam">Leave this empty: <br />
                                        <input name="url" />
                                    </p>
                                    <p class="dtr-form-field">
                                        <textarea rows="6" name="message" id="message"  placeholder="Message">
                                    </p>
                                    <?php echo form_error('message'); ?></textarea>
                                    <p class="text-left">
                                        <button class="button dtr-btn-styled dtr-btn-styled-white" type="submit" name="submit"><span class="bg-light-blue"></span>Send Message</button>
                                    </p>
                                    <div id="result"></div>
                                </fieldset>
                            </form>
                           
                        </div>
                        <!-- form ends --> 
                        
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- contact section ends
================================================== --> 
  