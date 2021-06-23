<a href="<?= base_url('user/overview');?>" class="<?= $this->uri->segment(2) == 'overview' ? 'user-item active' : 'user-item' ; ?>"><i class="uil uil-apps"></i>Overview</a>
<a href="<?= base_url('user/orders');?>" class="<?= $this->uri->segment(2) == 'orders' ? 'user-item active' : 'user-item' ; ?>"><i class="uil uil-box"></i>My Orders</a>
<a href="<?= base_url('user/rewards');?>" class="<?= $this->uri->segment(2) == 'rewards' ? 'user-item active' : 'user-item' ; ?>"><i class="uil uil-gift"></i>My Rewards</a>
<a href="<?= base_url('user/wallet');?>" class="<?= $this->uri->segment(2) == 'wallet' ? 'user-item active' : 'user-item' ; ?>"><i class="uil uil-wallet"></i>My Wallet</a>
<a href="<?= base_url('user/wishlist');?>" class="<?= $this->uri->segment(2) == 'wishlist' ? 'user-item active' : 'user-item' ; ?>"><i class="uil uil-heart"></i>Shopping Wishlist</a>
<a href="<?= base_url('user/address');?>" class="<?= $this->uri->segment(2) == 'address' ? 'user-item active' : 'user-item' ; ?>"><i class="uil uil-location-point"></i>My Address</a>
<a href="<?= base_url('user/logout');?>" class="user-item"><i class="uil uil-exit"></i>Logout</a>
