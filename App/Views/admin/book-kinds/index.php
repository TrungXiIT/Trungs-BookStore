<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quản lý loại sách</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT ?>/admin/home">Trang chủ</a></li>
          <li class="breadcrumb-item active">Quản lý loại sách</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <?php require_once(VIEW . DS . "shared/noti.php") ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="card-title">Tất cả loại sách</h3>
            <a href="<?= DOCUMENT_ROOT ?>/admin/bookKind/create" class="btn btn-primary ml-auto">Thêm loại sách</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="main-table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Mã loại sách</th>
                  <th>Tên loại sách</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key => $bookKind) : ?>
                  <tr>
                    <td><?= $bookKind['MaLoaiHang'] ?></td>
                    <td><?= $bookKind['TenLoaiHang'] ?></td>
                    <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm mb-1" href="<?= DOCUMENT_ROOT ?>/admin/bookKind/edit/<?= $bookKind['MaLoaiHang'] ?>">
                        <i class="fas fa-edit">
                        </i>
                        Sửa
                      </a>
                      <button type="button" class="btn btn-sm btn-danger mb-1" data-toggle="modal" data-target="#deleteBookConfirm<?= $key ?>">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="deleteBookConfirm<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="deleteBookConfirmTitle<?= $key ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle<?= $key ?>">Xác nhận xóa</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-left">
                              Xóa loại sách <?= $bookKind['TenLoaiHang'] ?>?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <a href="<?= DOCUMENT_ROOT ?>/admin/bookkind/delete/<?= $bookKind['MaLoaiHang'] ?>" class="btn btn-danger">Xóa</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>