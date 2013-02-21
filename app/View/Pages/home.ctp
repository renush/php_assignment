<div class="container">
    <!-- Forms
   ================================================== -->
    <section id="forms">
        <div class="page-header">
            <h1>Forms</h1>
        </div>
        <div class="row">
            <div class="bannerImg">
                <?php echo $this->Html->image('boyStandingCroped.png', array('alt' => ''))?>
            </div>
        </div>
        <div class="row">
            <div class="span10 offset1">
                <div class="myForm">
                    <?php echo $this->Form->create('User' ,array( 'type' => 'post','class' => 'form-horizontal', 'id' => 'myformUser')); ?>
                    <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <?php echo $this->Form->input('username',array('id' => 'username', 'placeholder' => 'Username', 'label' => false)); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <?php echo $this->Form->input('email',array('id' => 'inputEmail', 'placeholder' => 'Email', 'label' => false)); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <?php echo $this->Form->password('password', array('label' => false,'id' => "password",'onPaste'=> "return false",'onCopy'=>"return false", 'placeholder' => 'Password')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Mobile</label>
                        <div class="controls">
                            <?php echo $this->Form->input('mobile', array('label' => false, 'type' => 'text', 'id' => "mobile", 'maxlength' => '10', 'placeholder' => 'Mobile')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Options</label>
                        <div class="controls">
                            <?php
                            echo $this->Form->input('field', array('label' => false,'options' => array(1, 2, 3, 4, 5),'empty' => '(choose one)'));
                            ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <?php
                                echo $this->Form->checkbox('published', array(
                                    'value' => 'Y',
                                    'hiddenField' => false,
                                ));
                                ?>
                                I accept <?php echo $this->Html->link('terms and conditions', '#', array('class' => 'button', 'target' => '_blank')); ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group signUpBtns">
                        <div class="controls clearfix">
                            <?php echo $this->Form->submit('Sign Up', array('id' => 'signup', 'class' => 'btn btn-primary pull-left', 'div'=> false)); ?>
                            <?php echo $this->Form->reset('Cancel', array('id' => 'clear', 'class' => 'btn btn-primary pull-left btnClear')); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>

    </section>

    <!-- Tables
   ================================================== -->
</div>