<div class="container">
    <!-- <div class="row">
        <div class="col-md-10"> -->
            <h3 class="mt3">List Of Peoples</h3>
            
            <div class="row">
                <div class="col-md-5">
                    <form action="<?= base_url('peoples'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form_control" placeholder="Search Keyword... " name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                        </div>  
                    </form>
                </div>
            </div>


            <div class="row">
                <div class="col-md">
                    <!-- <h5>Result : <?= $total_rows; ?></h5> -->
                    <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($peoples)) : ?>
                            <tr>
                                <td colspan="4">
                                    <div class="alert alert-danger" role="alert">
                                        Data Not Found!            
                                    </div>
                            </td>
                            </tr>
                        <?php endif; ?>    
                        <?php foreach($peoples as $ps): ?>
                        <tr>
                            <th><?= ++$start?></th>
                            <td><?= $ps['name'] ?></td>
                            <td><?= $ps['email'] ?></td>
                            <td>
                            <a href="" class="badge badge-warning">Data</a>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        <!-- </div>
    </div> -->
</div>