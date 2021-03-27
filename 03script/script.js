'use strict';
// バリデーションの処理
(function(){
    //標準エラーメッセージの変更
    $.extend($.validator.messages, {
      email: '*正しいメールアドレスの形式で入力して下さい',
      required: '*入力必須です',
      phone: "*正しい電話番号の形式で入力してください",
      hurigana:"ひらがなで入力してください"
    });
  
  　//追加ルールの定義
    var methods = {
      hurigana: function(value, element){
        return this.optional(element) || /^[あ-ん゛゜ぁ-ぉゃ-ょー「」、]+/.test(value);
      },
      phone: function(value, element){
        return this.optional(element) || /^\d{10,11}$|^\d{2,4}-\d{1,4}-\d{4}$/.test(value);
      },
      email: function(value, element){
        return this.optional(element) || /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/.test(value);
      }
    };
  
    //メソッドの追加
    $.each(methods, function(key) {
      $.validator.addMethod(key, this);
    });
  
    //入力項目の検証ルール定義
    let rules = {
      name: {required: true},
      hurigana: {required: true, hurigana: true},
      tel: {required: true, phone:true} ,
      date: {required: true} ,
      storename: {required: true} ,
      email: {required: true, email: true}
    };
  
    //入力項目ごとのエラーメッセージ定義
    let messages = {
      name: {
        required: "名前を入力してください"
      },
      hurigana: {
        required: "ふりがなを入力してください"
      },
      email: {
        required: "メールアドレスを入力してください"
      },
      storename: {
        required: "希望院名を入力してください"
      },
      date: {
        required: "希望希望日を選択してください"
      },
      tel: {
        required: "電話番号を入力してください"
      }
    };
  
  $(function(){
      $('#form').validate({
        rules: rules,
        messages: messages,
  
        //エラーメッセージ出力箇所調整
        errorPlacement: function(error, element){
          if (element.is(':radio')) {
            error.appendTo(element.parent());
          }else {
            error.insertAfter(element);
          }
        }
      });
    });
})();
// -----------------------バリデーションの処理 ここまで-------------------------------