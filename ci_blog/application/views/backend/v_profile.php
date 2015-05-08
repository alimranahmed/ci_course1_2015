<div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $this->session->userdata("name");?> </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <?php if($this->session->userdata("user_id")): ?>
                    <?php foreach($users as $user): ?>
                      <tr>
                        <td>Name:</td>
                        <td><?php echo $user->name;?></td>
                      </tr>
                      
                      <tr>
                        <td>Username:</td>
                        <td><?php echo $user->username;?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $user->email;?></td>
                      </tr>
        			<?php endforeach ?>
        			<?php endif ?>
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        
                        
                    </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>