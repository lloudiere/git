
<!-- head_cdi -->
<div class="head_cdi">
        <div class="head_cdi_logo">
            <img src="_imgs/CDI250.png" alt="">
            <div class="titre_cdi">
                <h2>Côte des Isles</h2>
                <h3>Barnevile-Carteret</h3>
            </div>
        </div>
<!-- nav -->
        <nav>
            <ul class="navbar">
                <?php foreach ($navItems as $item): ?>
                    <li class="nav-item <?php echo isset($item['submenu']) ? 'dropdown' : ''; ?>">
                        <a href="<?php echo $item['url']; ?>"><?php echo mb_strtoupper($item['title']); ?></a>
                        <?php if (isset($item['submenu'])): ?>
                            <ul class="dropdown-content">
                                <?php foreach ($item['submenu'] as $subItem): ?>
                                    <li><a href="<?php echo $subItem['url']; ?>"><?php echo $subItem['title']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- <div class="trait"></div> -->
        </nav>
       
 <!-- Burger -->
        <div class="burger flexCol spaceCenter">
            <label class="hamburger-menu">
                <input type="checkbox">
            </label>
            <aside class="sidebar">
                
                    <div class="flexCol">
                        <?php foreach ($navItems as $item): ?>
                            <?php if($item['title']<>"|"){ ?>
                            <a href="<?php echo $item['url']; ?>"><?php echo mb_strtoupper($item['title']); ?></a>
                            <?php }else{?>
                                <a href="<?php echo $item['url']; ?>"><?php echo '___________'; ?></a>
                                <?php }?>
                        <?php endforeach; ?>
                    
                     </div> 
                
            </aside>
        </div>
    </div>