<?php
    $this->load->view('admin/templates/header2');
?>

<div class="container">
    <div class="container shadow-container">
        <?php if($this->session->flashdata('user_success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('user_success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('deluser_error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('deluser_error');?>
        </div>
        <?php endif ?>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <h2>Available Users</h2>
            </div>
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Search .." style="width:50%;">
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($users)) {?>
                    <?php foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['usersId']; ?></td>
                        <td><?php echo $user['usersUid']; ?></td>
                        <td><?php echo $user['firstName']; ?></td>
                        <td><?php echo $user['lastName']; ?></td>
                        <td><?php echo $user['usersEmail']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/updateUser/'.$user['usersId'];?>"
                                class="btn btn-info mb-1"><i
                                    class="fas fa-edit mr-1"></i>Edit</a>

                            <a href="<?php echo base_url().'admin/deleteUser/'.$user['usersId'];?>"
                                class="btn btn-danger"><i
                                    class="fas fa-edit mr-1"></i>Delete</a>

                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                    <tr>
                        <td colspan="8">Records not found</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">

function deleteUser(id) {
    if (confirm("Are you sure you want to delete user?")) {
        window.location.href = '<?php echo base_url().'admin/deleteUser';?>' + id;
    }
}

$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>