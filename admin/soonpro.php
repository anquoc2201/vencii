<?php include 'header.php' ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản Lý Sản phẩm sắp về
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <form action="" method="get" class="form-inline">
            <div class="form-group">
              <input name="name" class="form-control" placeholder="Tìm theo tên...">
            </div>
            <button type="" class="btn btn-success">
              <i class="fa fa-search"></i>
            </button>
            <a href="soonpro-add.php" class="btn btn-primary"><i class="fa fa-image"></i> Thêm sản phẩm sắp về</a>
          </form>
          
          <?php 
           $sql = "SELECT * FROM soonproduct Order By ordering ASC";

           // kiểm tra nếu có biến get
           if (!empty($_GET['name'])) {
             $name = $_GET['name'];
             $sql = "SELECT * FROM soonproduct WHERE name LIKE '%$name%' Order By ordering ASC";
           }

           $soonproduct = mysqli_query($conn,$sql);
          
           ?>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Trạng thái</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $soonproduct = get_user_posts['$sn'];
            if(is_array($soonproduct)) 
              foreach ($soonproduct as $key => $sn)
            
               
            ?>
              <tr>
                <td>1</td>
                <td>
                  <img src="../public/uploads/<?php echo $sn['link_image'] ?>" alt="" width="80px">
                </td>
                <td><?php echo $sn['name'] ?></td>
                <td>
                  <?php 
                  if($sn['status'] == 1) {
                    echo '<span class="label label-success">Hiện</span>';
                  }else{
                    echo '<span class="label label-danger">Ẩn</span>';
                  }

                  ?>
                </td>
                <td class="text-center">
                  <a href="" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                  <a href="soonpro-edit.php?id=<?php echo $sn['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                  <a href="bannsoonpro-delete.php?id=<?php echo $sn['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc không?')"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
        
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php'; ?>