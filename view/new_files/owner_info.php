<?php
	$msg=isset($msg)?$msg:"";
$msg=isset($msg)?$msg:"";
$id_product=isset($id_product)?$id_product:"";
$errors =isset($errors)?$errors:array();
$agent_list =isset($agent_list)?$agent_list:array();
	
		
?>
<form class="form" action="new_owner" method="POST" enctype="multipart/form-data">
	<div class="row text-white">
        <div class="col-2 ">
            <div class="col p-3 m-1 bg-light border border-primary">
                <span class="small text-dark">Name 3:</span>
                <input type="text" name="name_3" maxlength="30" value="<?php if (isset($name_3)) echo $name_3;?>" class="form-control form-control-sm">
                <span class="small text-dark">Phone 3:</span><span class="msg"><?php if(array_key_exists('phone_3', $errors)) echo $errors['phone_3']?></span>
                <input type="text" name="phone_3" maxlength="13" value="<?php if (isset($phone_3)) echo $phone_3;?>" class="form-control form-control-sm">
                <span class="small text-dark">e-mail 3:</span><span class="msg"><?php if(array_key_exists('e_mail_3', $errors)) echo $errors['e_mail_3']?></span>
                <input type="text" name="e_mail_3" maxlength="50" value="<?php if (isset($e_mail_3)) echo $e_mail_3;?>" class="form-control form-control-sm">
            </div>
            <div class="col p-3 m-1 bg-light border border-primary">
                <span class="small text-dark">Name 4:</span>
                <input type="text" name="name_4" maxlength="30" value="<?php if (isset($name_4)) echo $name_4;?>" class="form-control form-control-sm">
                <span class="small text-dark">Phone 4:</span><span class="msg"><?php if(array_key_exists('phone_4', $errors)) echo $errors['phone_4']?></span>
                <input type="text" name="phone_4" maxlength="13" value="<?php if (isset($phone_4)) echo $phone_4;?>" class="form-control form-control-sm">
                <span class="small text-dark">e-mail 4:</span><span class="msg"><?php if(array_key_exists('e_mail_4', $errors)) echo $errors['e_mail_4']?></span>
                <input type="text" name="e_mail_4" maxlength="50" value="<?php if (isset($e_mail_4)) echo $e_mail_4;?>" class="form-control form-control-sm">
            </div>
            <div class="col p-3 m-1 bg-light border border-primary">
                <span class="small text-dark">Name 5:</span>
                <input type="text" name="name_5" maxlength="30" value="<?php if (isset($name_5)) echo $name_5;?>" class="form-control form-control-sm">
                <span class="small text-dark">Phone 5:</span><span class="msg"><?php if(array_key_exists('phone_5', $errors)) echo $errors['phone_5']?></span>
                <input type="text" name="phone_5" maxlength="13" value="<?php if (isset($phone_5)) echo $phone_5;?>" class="form-control form-control-sm">
                <span class="small text-dark">e-mail 5:</span><span class="msg"><?php if(array_key_exists('e_mail_5', $errors)) echo $errors['e_mail_5']?></span>
                <input type="text" name="e_mail_5" maxlength="50" value="<?php if (isset($e_mail_5)) echo $e_mail_5;?>" class="form-control form-control-sm">

            </div>
            <div class="col p-3 m-1 bg-light border border-primary">
                <span class="small text-dark">Name 6:</span>
                <input type="text" name="name_6" maxlength="30" value="<?php if (isset($name_6)) echo $name_6;?>" class="form-control form-control-sm">
                <span class="small text-dark">Phone 6:</span><span class="msg"><?php if(array_key_exists('phone_6', $errors)) echo $errors['phone_6']?></span>
                <input type="text" name="phone_6" maxlength="13" value="<?php if (isset($phone_6)) echo $phone_6;?>" class="form-control form-control-sm">
                <span class="small text-dark">e-mail 6:</span><span class="msg"><?php if(array_key_exists('e_mail_6', $errors)) echo $errors['e_mail_6']?></span>
                <input type="text" name="e_mail_6" maxlength="50" value="<?php if (isset($e_mail_6)) echo $e_mail_6;?>" class="form-control form-control-sm">

            </div>
            <div class="col p-3 m-1 bg-light border border-primary">
                <span class="small text-dark">Name 7:</span>
                <input type="text" name="name_7" maxlength="30" value="<?php if (isset($name_7)) echo $name_7;?>" class="form-control form-control-sm">
                <span class="small text-dark">Phone 7:</span><span class="msg"><?php if(array_key_exists('phone_7', $errors)) echo $errors['phone_7']?></span>
                <input type="text" name="phone_7" maxlength="13" value="<?php if (isset($phone_7)) echo $phone_7;?>" class="form-control form-control-sm">
                <span class="small text-dark">e-mail 7:</span><span class="msg"><?php if(array_key_exists('e_mail_7', $errors)) echo $errors['e_mail_7']?></span>
                <input type="text" name="e_mail_7" maxlength="50" value="<?php if (isset($e_mail_7)) echo $e_mail_7;?>" class="form-control form-control-sm">

            </div>
            <div class="col p-3 m-1 bg-light border border-primary">
                <span class="small text-dark">Name 8:</span>
                <input type="text" name="name_8" maxlength="30" value="<?php if (isset($name_8)) echo $name_8;?>" class="form-control form-control-sm">
                <span class="small text-dark">Phone 8:</span><span class="msg"><?php if(array_key_exists('phone_8', $errors)) echo $errors['phone_8']?></span>
                <input type="text" name="phone_8" maxlength="13" value="<?php if (isset($phone_8)) echo $phone_8;?>" class="form-control form-control-sm">
                <span class="small text-dark">e-mail 8:</span><span class="msg"><?php if(array_key_exists('e_mail_8', $errors)) echo $errors['e_mail_8']?></span>
                <input type="text" name="e_mail_8" maxlength="50" value="<?php if (isset($e_mail_8)) echo $e_mail_8;?>" class="form-control form-control-sm">

            </div>
            <div class="col p-3 m-1 bg-light border border-primary">
                <span class="small text-dark">Name 9:</span>
                <input type="text" name="name_9" maxlength="30" value="<?php if (isset($name_9)) echo $name_9;?>" class="form-control form-control-sm">
                <span class="small text-dark">Phone 9:</span><span class="msg"><?php if(array_key_exists('phone_9', $errors)) echo $errors['phone_9']?></span>
                <input type="text" name="phone_9" maxlength="13" value="<?php if (isset($phone_9)) echo $phone_9;?>" class="form-control form-control-sm">
                <span class="small text-dark">e-mail 9:</span><span class="msg"><?php if(array_key_exists('e_mail_9', $errors)) echo $errors['e_mail_9']?></span>
                <input type="text" name="e_mail_9" maxlength="50" value="<?php if (isset($e_mail_9)) echo $e_mail_9;?>" class="form-control form-control-sm">
            </div>
        </div>
		<div class="col-10 mt-2">
            <div class="row mt-4 pb-3 bg-light text-danger border border-primary">
                <!--<input type="hidden" name="id_product" value="//<?php echo $id_product?>">-->
                <div class="col-4 mt-2">
                    <span class="small text-dark">Name:</span>
                    <input type="text" name="owner_name" maxlength="20" value="<?php if (isset($owner_name)) echo $owner_name;?>" class="form-control form-control-sm">
                    <span class="small text-dark">e-mail:</span><span class="msg"><?php if(array_key_exists('e_mail', $errors)) echo $errors['e_mail']?></span>
                    <input type="text" name="e_mail" maxlength="50" value="<?php if (isset($e_mail)) echo $e_mail;?>" class="form-control form-control-sm">
                </div>
                <div class="col-3 mt-2">
                    <span class="small text-dark">Agent:</span>
                    <select class="custom-select custom-select-sm" name="agent">
                        <option value="<?php if (isset($agent)) echo $agent;?>"><?php if (isset($agent)) echo $agent;?></option>
                        <?php foreach ($agent_list as $li_ag){?>
                            <option value="<?php echo $li_ag['name_surname']?>"><?php echo $li_ag['name_surname']?></option>
                        <?php }?>
                    </select>
                    <span class="small text-dark">Phone:</span><span class="msg"><?php if(array_key_exists('phone', $errors)) echo $errors['phone']?></span>
                    <input type="text" name="phone" maxlength="13" value="<?php if (isset($phone)) echo $phone;?>" class="form-control form-control-sm">
                </div>
                <div class="col-3 mt-2">
                    <span class="small text-dark">Source:</span>
                    <input type="text" name="source" maxlength="20" value="<?php if (isset($source)) echo $source;?>" class="form-control form-control-sm">
                    <span class="small text-dark">Phone 2:</span><span class="msg"><?php if(array_key_exists('phone_1', $errors)) echo $errors['phone_1']?></span>
                    <input type="text" name="phone_1" maxlength="13" value="<?php if (isset($phone_1)) echo $phone_1;?>" class="form-control form-control-sm">
                </div>
                <div class="col-2 mt-2">
                    <span class="small text-dark">Title:</span>
                    <input type="text" name="title" maxlength="20" value="<?php if (isset($title)) echo $title;?>" class="form-control form-control-sm">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="row border-success border-top border-left border-right">
                            <div id="headingOne">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <input class="btn btn-link mt-1 ml-1" type="text" name="owner_type" value="corporate" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <input class="btn btn-link mt-1" type="text" name="owner_type" value="personal" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                </div>
                            </div>
                        </div>
                        <div id="collapseExample" class="collapse show">
                            <div class="row border-success border-left border-right">
                                <div class="col-4 mt-2 mb-3">
                                    <span class="small text-dark">Company name:</span>
                                    <input type="text" name="company_name" maxlength="30" value="<?php if (isset($company_name)) echo $company_name;?>" class="form-control form-control-sm">
                                </div>
                                <div class="col mt-2 mb-3">
                                    <span class="small text-dark">TIN:</span><span class="msg"><?php if(array_key_exists('tin', $errors)) echo $errors['tin']?></span>
                                    <input type="text" name="tin" size="13" maxlength="13" value="<?php if (isset($tin)) echo $tin;?>" class="form-control form-control-sm">
                                </div>&nbsp;
                                <div class="col mt-2 mb-3">
                                    <span class="small text-dark">Company no:</span><span class="msg"><?php if(array_key_exists('company_num', $errors)) echo $errors['company_num']?></span>
                                    <input type="text" name="company_num" size="6" maxlength="6" value="<?php if (isset($company_num)) echo $company_num;?>" class="form-control form-control-sm">
                                </div>&nbsp;
                                <div class="col mt-2 mb-3">
                                    <span class="small text-dark">Activity code:</span><span class="msg"><?php if(array_key_exists('activity_code', $errors)) echo $errors['activity_code']?></span>
                                    <input type="text" name="activity_code" size="4" maxlength="4" value="<?php if (isset($activity_code)) echo $activity_code;?>" class="form-control form-control-sm">
                                </div>
                                <div class="col-4 mt-2 mb-3">
                                    <span class="small text-dark">Address company:</span>
                                    <input type="text" name="company_address" maxlength="30" value="<?php if (isset($company_address)) echo $company_address;?>" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-success border-left border-right border-top owner-bg">
                        <div class="col mt-2 mb-3">
                            <span class="small text-dark">Responsible person:</span>
                            <input type="text" name="responsible_person" maxlength="50" value="<?php if (isset($responsible_person)) echo $responsible_person;?>" class="form-control form-control-sm" placeholder="Name Surname">
                        </div>
                        <div class="col mt-2 mb-3">
                            <span class="small text-dark">ID number:</span><span class="msg"><?php if(array_key_exists('id_num', $errors)) echo $errors['id_num']?></span>
                            <input type="text" name="id_num" maxlength="9" value="<?php if (isset($id_num)) echo $id_num;?>" class="form-control form-control-sm">
                        </div>
                        <div class="col mt-2 mb-3">
                            <span class="small text-dark">UMCN:</span><span class="msg"><?php if(array_key_exists('UMCN', $errors)) echo $errors['UMCN']?></span>
                            <input type="text" name="UMCN" maxlength="13" value="<?php if (isset($UMCN)) echo $UMCN;?>" class="form-control form-control-sm">
                        </div>
                        <div class="col-2 mt-2">
                            <span class="small text-dark">B day:</span>
                            <input type="date" name="b_day" maxlength="10" value="<?php if (isset($b_day)) echo $b_day;?>"class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row text-danger border-success border-bottom border-left border-right owner-bg">
                        <div class="col mt-2 mb-3">
                            <span class="small text-dark">Owners address:</span>
                            <input type="text" name="owner_address" maxlength="130" value="<?php if (isset($owner_address)) echo $owner_address;?>" class="form-control form-control-sm">
                        </div>
                        <div class="col mt-2 mb-3">
                            <span class="small text-dark">Owners e-mail:</span><span class="msg"><?php if(array_key_exists('e_mail_owner', $errors)) echo $errors['e_mail_owner']?></span>
                            <input type="text" name="e_mail_owner" maxlength="50" value="<?php if (isset($e_mail_owner)) echo $e_mail_owner;?>" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3 mb-3">
                    <span class="text-dark">Documents:</span>
                    <input type="file" name="doc[]" value="" class="control-file text-dark"  multiple="multiple">
                    <span class="msg text-danger"><?php if(array_key_exists('doc', $errors)) echo $errors['doc']?></span>
                </div>
                <div class="col-2">
                    <input class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" value="Pause">
                </div>
                <div class="col-2">
                    <input class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" value="Confirm">
                </div>
            </div>
        </div>
    </div>
</form>
