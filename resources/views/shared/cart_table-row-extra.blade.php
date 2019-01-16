<tr data-id="{{$item->id}}" data-test-price="" data-price="{{$item->price}}" class="table-cart__item table-cart__item-extra">
  <td>
    <div class="unit align-items-center flex-row unit-spacing-xs">
      <div class="unit-left">
        <span class="icon icon-xs fa fa-trash text-hover-primary"></span>
      </div>
      <div class="unit-body">
        <p>
          <span class="table-cart__item-name link-decoration-none text-primary"
              href="{{$item->url}}">{{$item->name}}</span>
        </p>
      </div>
    </div>
  </td>
  <td class="text-gray text-nowrap">
    <span class="cart__item_price">{{$item->getPrice($extra['qty'])}}</span> &#x20bd;
  </td>
  <td>
    <div class="form-wrap form-wrap-border-none">
      <input class="form-input input-sm cart__item-extra_qty"
             type="number"
             readonly
             data-zeros="true"
             value="{{$extra['qty']}}" min="1" max="60">
    </div>
  </td>
  <td class="text-gray"><span class="cart__item_summ">{{$item->getPrice($extra['qty']) * $extra['qty']}}</span> &#x20bd;</td>
</tr>