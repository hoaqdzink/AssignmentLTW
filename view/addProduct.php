
<div class="main" style="display: flex;
	justify-content: center; height: 500px;">
    <div class="containerUpdate">
        <div class="text">
            THÊM SP
        </div>
        <!-- <?php 
            var_dump($kqonesp)
        ?> -->
        <form action="admin.php?act=addsp" method="post">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="tensp" required>
                    <div class="underline"></div>
                    <label for="">Tên Sản Phẩm</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="gia"  required>
                    <div class="underline"></div>
                    <label for="">Giá sản phẩm</label>
                </div>
                <div class="input-data">
                    <input type="text" name="soluong" required>
                    <div class="underline"></div>
                    <label for="">Số lượng</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80" name="hinh" required></textarea>
                    <br />
                    <div class="underline"></div>
                    <label for="">Link hình</label>
                    <br />
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" name="themmoi" value="submit">
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>