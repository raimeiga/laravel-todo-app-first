<!-- トップページの「タグの追加」モーダル -->

<!-- タグの編集用モーダル -->
@include('modals.edit_tag')     
<!-- ↑↓ タグの編集用と削除用モーダルを記述する位置について
        Bootstrapの仕様上、モーダルの中にモーダルを作成できないので、下記↓(コードのまん中くらい）に
        あるatマークforeach ($tags as $tag)～endforeach内には書かず、foreach文の外に書いている 
 -->
<!-- タグの削除用モーダル -->
@include('modals.delete_tag')

<div class="modal fade" id="addTagModal" tabindex="-1" aria-labelledby="addTagModalLabel">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addTagModalLabel">タグの追加</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
             </div>
             <form action="{{ route('tags.store') }}" method="post">
                 @csrf
                 <div class="modal-body">
                     <input type="text" class="form-control" name="name">
                     <div class="d-flex flex-wrap">
                         @foreach ($tags as $tag)
                             <div class="d-flex align-items-center mt-3 me-3">                            
                                 <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editTagModal" data-bs-dismiss="modal" data-tag-id="{{ $tag->id }}" data-tag-name="{{ $tag->name }}">{{ $tag->name }}</button>
                                 <!-- ↑ タグ自体を編集用ボタンにしているので、タグをクリックすると、↑「タグの編集用モーダル」edit_tagが開く-->
                                 <button type="button" class="btn-close ms-1" aria-label="削除" data-bs-toggle="modal" data-bs-target="#deleteTagModal" data-bs-dismiss="modal" data-tag-id="{{ $tag->id }}" data-tag-name="{{ $tag->name }}"></button>                                                 
                                 <!-- ↑ 削除をクリックすると「タグの削除用モーダル」edit_tagが開く -->
                             </div>
                         @endforeach 
                     </div>    
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">登録</button>
                 </div>
             </form>
         </div>
     </div>
 </div>