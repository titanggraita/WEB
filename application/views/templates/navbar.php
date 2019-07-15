<nav class="navbar navbar-expand-lg navbar-dark bg-nav py-3">
    <a class="navbar-brand" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/batan1.png" class="img-brand mr-3"> FAQ SYSTEM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>user/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>user/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>user/policies">Policies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>user/contact">Contact Us</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="<?= base_url() ?>C_login/register"><button class="btn btn-info btn-sm">Open Question</button></a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="<?= base_url() ?>C_login/index"><button class="btn btn-info btn-sm">Login</button></a>
            </li>
        </ul>
    </div>

</nav>
<div class="bg-nav text-center py-5">
    <p style="color:#EEE8AA; font-size:18px;">How can we help you today?</p>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="<?= base_url('c_faq/search') ?>" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" style="border-radius:40px;" placeholder="Search for articles ..." name="keyword">
                        <span class="input-group-btn">
                            <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>