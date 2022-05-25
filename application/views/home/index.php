<section id="header">
    <a href=""><img src="<?= base_url("assets/logo/logo.png") ?>" class="logo" alt="" width="150px"></a>

    <div>
        <ul id="navbar">
            <li>
                <div class="boxContainer">
                    <table class="elementsContainer">
                        <tr>
                            <td>
                                <form action="<?= base_url('home/search/') ?>" method="get">
                                    <div class="input-group">
                                        <input type="text" class="search" name="keyword" placeholder="Search...">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <a href="<?= base_url('home/search'); ?>">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a class="active" href="<?= base_url("home"); ?>">Home</a></li>
            <li><a href="<?= base_url("home/produk"); ?>">Produk</a></li>
            <li id="lg-bag"><a href="<?= base_url("auth"); ?>"><i class="fas fa-shopping-cart"></i></a></li>
            <li><a href="<?= base_url("home/about"); ?>">About</a></li>
            <li><a href="<?= base_url("auth"); ?>">Login</a>/<a href="<?= base_url("auth/register"); ?>">Register</a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href=""><i class="fas fa-shopping-cart"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>