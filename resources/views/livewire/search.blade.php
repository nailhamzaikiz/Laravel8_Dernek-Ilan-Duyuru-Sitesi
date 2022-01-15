<div class="ms-md-auto pe-md-0 d-flex align-items-center">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="input-group input-group-outline">
        <label class="form-label">Arama...</label>
        <input wire:model="search" name="search" type="text" class="form-control" list="mylist" />
        @if(!empty($query))
            <datalist id="mylist">
                <option value="asdas">asdasd</option>
                @foreach($datalist as $rs)
                    <option value="{{$rs->title}}">{{$rs->menu->title}}</option>
                @endforeach
            </datalist>
        @endif
    </div>
</div>
