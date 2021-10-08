
<div class="user_admin row">
    <div class="col-md-12">
        <div class="add_new_seach row mb-2">
            <div class="col-md-2">
                <a class="add publish-submit btn bg-secondary text-white" href="<?= (isset($_GET['view'])) ? strstr(param, "&v", true) : param ?>&view=post_detail">add</a>
            </div>
        </div>
        <table class="table table-view w-100">
            <thead>
                <tr>
                    <td class="tb_checkbox">STT</td>
                    <td>Mail</td>
                    <td>Title</td>
                    <td>Khởi Hành</td>
                    <td>Kết Thúc</td>
                    <td>Số Lượng</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 0; foreach($data['bill'] as $item => $key){
                    ?>
                     <tr>
                        <th>
                            <p><?= ++$stt; ?></p>
                        </th>
                        <th>
                            <p><?= $data['user'][$item][0]['user'] ?></p>
                        </th>
                        <th>
                            <p><?= $data['ticket'][$item][0]['name'] ?></p>
                        </th>
                        <th>
                            <p><?= $data['ticket'][$item][0]['delivery_date'] ?></p>
                        </th>
                        <th>
                            <p><?= $data['ticket'][$item][0]['end_date'] ?></p>
                        </th>
                        <th>
                            <p><?= $key['quantity'] ?></p>
                        </th>
                        <th>
                            <p><?php if( $key['status'] ==0){
                                echo 'Chờ xử lý';
                            }else
                            if( $key['status'] == 1){
                                echo 'Đã thanh toán';
                            }else{
                                echo 'Hủy';
                            }
                             ?></p>
                        </th>
                        <th>
                            <a class="btn btn-primary" href="?url=admin&view=bill&key=huy&id=<?= $key['id'] ?>">Hủy</a>
                            <?php if( $key['status'] ==0){
                                ?>
                                 <a class="btn btn-primary" href="?url=admin&view=bill&key=duyet&id=<?= $key['id'] ?>">Thanh Toán</a>
                                <?php
                            }?>
                           
                        </th>
                    </tr>
                    <?php
                } ?>
               
            </tbody>
            <tfoot>
                <tr>
                <td class="tb_checkbox">STT</td>
                    <td>Mail</td>
                    <td>Title</td>
                    <td>Khởi Hành</td>
                    <td>Kết Thúc</td>
                    <td>Số Lượng</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>