
<div class="main" style="display: flex;
	justify-content: center; height: 500px;">
    <div class="containerUpdate">
        <div class="text">
            THÊM CTV
        </div>

        <form action="admin.php?act=themUser" method="post">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="user" required>
                    <div class="underline"></div>
                    <label for="">Username</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="pass"  required>
                    <div class="underline"></div>
                    <label for="">Password</label>
                </div>
                <div class="input-data">
                    <input type="text" name="name" required>
                    <div class="underline"></div>
                    <label for="">Fullname</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="phone"  required>
                    <div class="underline"></div>
                    <label for="">Phone</label>
                </div>
                <div class="input-data">
                    <input type="text" name="email" required>
                    <div class="underline"></div>
                    <label for="">email</label>
                </div>
            </div>
           <div class="form-row">
               <label style="color:red;">Phân quyền</label> <br>
               <div class="radiorole">
                    <input type="radio" id="html" name="role" value="1" style="margin-left: 8px;">
                        <label for="html">Nhân Viên</label><br>
                        <input type="radio" id="css" name="role" value="2">
                        <label for="css">Khách hàng</label><br>
               </div>
           </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <br />
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" name="themUser" value="submit">
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>