<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-header ">
            <div class="modal-title card-title" id="myModalLabel" style="color:white;"><i class="fa fa-sign-in"></i> Đăng nhập</div>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        </div>
        <div class="modal-content">
            <div class="panel panel-primary card">

            <span class="help-block" style="text-align: center;color: #dd4b39;margin-top: 20px;margin-bottom: 0">
                <strong></strong>
            </span>

                <form id="sign_in" role="form" action="https://thegarenagiare.com/login" method="POST">
                    <input type="hidden" name="_token" value="LFU5vc7pZziGJQf9VIxouOMS69I1iKGKLLsACICJ">
                    <div class="panel-body card-body">
                        <div class="alert alert-danger" id="divnotify"><i class="fa fa-info-circle fa-lg"></i><span></span></div>
                        <div class="form-group">
                            <label for="ctrlusername">Tài khoản</label>
                            <input type="text" name="username" id="ctrlusername" class="form-control" placeholder="Tài khoản đăng nhập" tabindex="1"   autofocus="autofocus" />
                        </div>
                        <div class="form-group">
                            <label for="ctrlpass">Mật khẩu:</label>
                            <input type="password" name="password" id="ctrlpass" class="form-control" autocomplete="off" placeholder="Mật khẩu" tabindex="2" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="ctrlloginbtn" tabindex="3"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                            &nbsp;
                        </div>
                        <div class="text-form text-center">
                            <p>----  Hoặc  ----</p>
                        </div>
                        <div class="form-group m-form__group text-center">
                            <a style="" href="http://fb.nhapnick.com/thegarenagiare_com" class=""><i class="fab fa-facebook-square" style="font-size: 33px"></i></a>
                        </div>

                        <!-- <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#forgotyourpassword">Quên mật khẩu?</a> -->
                    </div>
                    <div class="panel-footer card-footer">
                        <a class="float-right" href="/register"><i class="fa fa-share-square-o"></i> Bạn chưa có tài khoản? Đăng ký ngay</a>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
