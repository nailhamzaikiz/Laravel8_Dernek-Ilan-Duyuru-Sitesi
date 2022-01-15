<div class="card card-body container col-md-3  p-3 m-5 shadow-dark border-1" >
    <!-- Slider Başlangıcı -->
    <div class="text-center">
        <h4 class="text-center ">Duyurular</h4>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Sayı</th>
                <th >Duyuru</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $a=0;
            ?>
            @foreach($duyurular as $rs)
                <?php
                $a++;
                ?>
                <tr>
                    <th scope="row">{{$a}}</th>
                    <td ><a href="{{route('content',['id'=>$rs->id])}}">{!! substr($rs->detail,0,40) !!}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <hr class="my-3">
    <h4 class="text-center">Üyeler</h4>
    <!-- Slider Sonu -->
</div>
