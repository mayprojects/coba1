
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3" style="font-size: 12pt;">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard');?>">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard/input'); ?>">
              <span data-feather="plus-circle"></span>
              Input Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard/tampil'); ?>">
              <span data-feather="file-text"></span>
              Read Data
            </a>
          </li>
        </ul>

        
      </div>
    </nav>