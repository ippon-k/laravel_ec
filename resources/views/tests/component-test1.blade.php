<x-tests.app>
  <x-slot name="header">header1</x-slot>
コンポーネントテスト１
  <x-tests.card title="タイトルを渡すよ" content="本文を渡すよ" :message="$message"/>
  <x-tests.card title="タイトル2" />
  <x-tests.card title="CSSを変更したい" class="bg-red-300" />
</x-tests.app>
{{-- コロンをつけると属性ではなく変数を受け取る --}}
