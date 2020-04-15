<div class="left_sidebar_area">
    <?php
        $kategori=DB::table('kategori')->get();
    ?>
    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
        <div class="l_w_title">
            <h3>Cari Kategori</h3>
        </div>
        <div class="widgets_inner">
            <ul class="list">
            @foreach($kategori as $category)
                <li>
                    <a href="{{route('kategori',$category->id_kategori)}}">{{$category->nama_kategori}}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </aside>
</div>