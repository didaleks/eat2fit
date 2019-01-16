<tr data-id="{{$item->id}}" data-test-price="{{$item->test_price}}" data-price="{{$item->price}}" class="table-cart__item">
  <td>
    <div class="unit align-items-center flex-row unit-spacing-xs">
      <div class="unit-left">
        <span class="icon icon-xs fa fa-trash text-hover-primary"></span>
      </div>
      <div class="unit-body">
        <p>
          <a class="table-cart__item-name link-decoration-none"
              href="{{$item->url}}">{{$item->name}}<span class="{{($diet['qty'] == 1)?'':'d-none'}}"> (Пробный день)</span></a>
        </p>
      </div>
    </div>
  </td>
  <td class="text-gray text-nowrap">
    <span class="cart__item_price">{{$item->getPrice($diet['qty'])}}</span> &#x20bd;
  </td>
  <td>
    <div class="form-wrap form-wrap-border-none">
      <input class="form-input input-sm cart__item_qty"
             type="number"
             readonly
             data-zeros="true"
             value="{{$diet['qty']}}" min="1" max="60">
    </div>
  </td>
  <td class="text-gray"><span class="cart__item_summ">{{$item->getPrice($diet['qty']) * $diet['qty']}}</span> &#x20bd;</td>
</tr>