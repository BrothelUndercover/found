<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection group
     * @property Grid\Column|Collection mark
     * @property Grid\Column|Collection cover
     * @property Grid\Column|Collection origin
     * @property Grid\Column|Collection publisher
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection is_check
     * @property Grid\Column|Collection company_id
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection category
     * @property Grid\Column|Collection platform_logo
     * @property Grid\Column|Collection platform_name
     * @property Grid\Column|Collection platform_url
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection is_real
     * @property Grid\Column|Collection area
     * @property Grid\Column|Collection service_project
     * @property Grid\Column|Collection service_mode
     * @property Grid\Column|Collection company_address
     * @property Grid\Column|Collection company_phone
     * @property Grid\Column|Collection obline_at
     * @property Grid\Column|Collection platform_introduce
     * @property Grid\Column|Collection company_name
     * @property Grid\Column|Collection company_person
     * @property Grid\Column|Collection company_capital
     * @property Grid\Column|Collection company_paid
     * @property Grid\Column|Collection Established_at
     * @property Grid\Column|Collection operating_status
     * @property Grid\Column|Collection business_creditcode
     * @property Grid\Column|Collection business_num
     * @property Grid\Column|Collection organization_code
     * @property Grid\Column|Collection company_type
     * @property Grid\Column|Collection industry
     * @property Grid\Column|Collection approved_at
     * @property Grid\Column|Collection regauth
     * @property Grid\Column|Collection period
     * @property Grid\Column|Collection taxqua
     * @property Grid\Column|Collection regi_addr
     * @property Grid\Column|Collection business_scope
     * @property Grid\Column|Collection record_checkdate
     * @property Grid\Column|Collection record_chargeperson
     * @property Grid\Column|Collection record_code
     * @property Grid\Column|Collection supervision_logo
     * @property Grid\Column|Collection supervision_name
     * @property Grid\Column|Collection supervision_country
     * @property Grid\Column|Collection supervision_type
     * @property Grid\Column|Collection supervision_card_at
     * @property Grid\Column|Collection supervision_code
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection Introduction
     * @property Grid\Column|Collection check_time
     * @property Grid\Column|Collection is_business
     * @property Grid\Column|Collection is_site
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection wechat
     * @property Grid\Column|Collection qq
     * @property Grid\Column|Collection age
     * @property Grid\Column|Collection city
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection group(string $label = null)
     * @method Grid\Column|Collection mark(string $label = null)
     * @method Grid\Column|Collection cover(string $label = null)
     * @method Grid\Column|Collection origin(string $label = null)
     * @method Grid\Column|Collection publisher(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection is_check(string $label = null)
     * @method Grid\Column|Collection company_id(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection category(string $label = null)
     * @method Grid\Column|Collection platform_logo(string $label = null)
     * @method Grid\Column|Collection platform_name(string $label = null)
     * @method Grid\Column|Collection platform_url(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection is_real(string $label = null)
     * @method Grid\Column|Collection area(string $label = null)
     * @method Grid\Column|Collection service_project(string $label = null)
     * @method Grid\Column|Collection service_mode(string $label = null)
     * @method Grid\Column|Collection company_address(string $label = null)
     * @method Grid\Column|Collection company_phone(string $label = null)
     * @method Grid\Column|Collection obline_at(string $label = null)
     * @method Grid\Column|Collection platform_introduce(string $label = null)
     * @method Grid\Column|Collection company_name(string $label = null)
     * @method Grid\Column|Collection company_person(string $label = null)
     * @method Grid\Column|Collection company_capital(string $label = null)
     * @method Grid\Column|Collection company_paid(string $label = null)
     * @method Grid\Column|Collection Established_at(string $label = null)
     * @method Grid\Column|Collection operating_status(string $label = null)
     * @method Grid\Column|Collection business_creditcode(string $label = null)
     * @method Grid\Column|Collection business_num(string $label = null)
     * @method Grid\Column|Collection organization_code(string $label = null)
     * @method Grid\Column|Collection company_type(string $label = null)
     * @method Grid\Column|Collection industry(string $label = null)
     * @method Grid\Column|Collection approved_at(string $label = null)
     * @method Grid\Column|Collection regauth(string $label = null)
     * @method Grid\Column|Collection period(string $label = null)
     * @method Grid\Column|Collection taxqua(string $label = null)
     * @method Grid\Column|Collection regi_addr(string $label = null)
     * @method Grid\Column|Collection business_scope(string $label = null)
     * @method Grid\Column|Collection record_checkdate(string $label = null)
     * @method Grid\Column|Collection record_chargeperson(string $label = null)
     * @method Grid\Column|Collection record_code(string $label = null)
     * @method Grid\Column|Collection supervision_logo(string $label = null)
     * @method Grid\Column|Collection supervision_name(string $label = null)
     * @method Grid\Column|Collection supervision_country(string $label = null)
     * @method Grid\Column|Collection supervision_type(string $label = null)
     * @method Grid\Column|Collection supervision_card_at(string $label = null)
     * @method Grid\Column|Collection supervision_code(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection Introduction(string $label = null)
     * @method Grid\Column|Collection check_time(string $label = null)
     * @method Grid\Column|Collection is_business(string $label = null)
     * @method Grid\Column|Collection is_site(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection wechat(string $label = null)
     * @method Grid\Column|Collection qq(string $label = null)
     * @method Grid\Column|Collection age(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection group
     * @property Show\Field|Collection mark
     * @property Show\Field|Collection cover
     * @property Show\Field|Collection origin
     * @property Show\Field|Collection publisher
     * @property Show\Field|Collection content
     * @property Show\Field|Collection is_check
     * @property Show\Field|Collection company_id
     * @property Show\Field|Collection status
     * @property Show\Field|Collection category
     * @property Show\Field|Collection platform_logo
     * @property Show\Field|Collection platform_name
     * @property Show\Field|Collection platform_url
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection is_real
     * @property Show\Field|Collection area
     * @property Show\Field|Collection service_project
     * @property Show\Field|Collection service_mode
     * @property Show\Field|Collection company_address
     * @property Show\Field|Collection company_phone
     * @property Show\Field|Collection obline_at
     * @property Show\Field|Collection platform_introduce
     * @property Show\Field|Collection company_name
     * @property Show\Field|Collection company_person
     * @property Show\Field|Collection company_capital
     * @property Show\Field|Collection company_paid
     * @property Show\Field|Collection Established_at
     * @property Show\Field|Collection operating_status
     * @property Show\Field|Collection business_creditcode
     * @property Show\Field|Collection business_num
     * @property Show\Field|Collection organization_code
     * @property Show\Field|Collection company_type
     * @property Show\Field|Collection industry
     * @property Show\Field|Collection approved_at
     * @property Show\Field|Collection regauth
     * @property Show\Field|Collection period
     * @property Show\Field|Collection taxqua
     * @property Show\Field|Collection regi_addr
     * @property Show\Field|Collection business_scope
     * @property Show\Field|Collection record_checkdate
     * @property Show\Field|Collection record_chargeperson
     * @property Show\Field|Collection record_code
     * @property Show\Field|Collection supervision_logo
     * @property Show\Field|Collection supervision_name
     * @property Show\Field|Collection supervision_country
     * @property Show\Field|Collection supervision_type
     * @property Show\Field|Collection supervision_card_at
     * @property Show\Field|Collection supervision_code
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection Introduction
     * @property Show\Field|Collection check_time
     * @property Show\Field|Collection is_business
     * @property Show\Field|Collection is_site
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection wechat
     * @property Show\Field|Collection qq
     * @property Show\Field|Collection age
     * @property Show\Field|Collection city
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection group(string $label = null)
     * @method Show\Field|Collection mark(string $label = null)
     * @method Show\Field|Collection cover(string $label = null)
     * @method Show\Field|Collection origin(string $label = null)
     * @method Show\Field|Collection publisher(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection is_check(string $label = null)
     * @method Show\Field|Collection company_id(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection category(string $label = null)
     * @method Show\Field|Collection platform_logo(string $label = null)
     * @method Show\Field|Collection platform_name(string $label = null)
     * @method Show\Field|Collection platform_url(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection is_real(string $label = null)
     * @method Show\Field|Collection area(string $label = null)
     * @method Show\Field|Collection service_project(string $label = null)
     * @method Show\Field|Collection service_mode(string $label = null)
     * @method Show\Field|Collection company_address(string $label = null)
     * @method Show\Field|Collection company_phone(string $label = null)
     * @method Show\Field|Collection obline_at(string $label = null)
     * @method Show\Field|Collection platform_introduce(string $label = null)
     * @method Show\Field|Collection company_name(string $label = null)
     * @method Show\Field|Collection company_person(string $label = null)
     * @method Show\Field|Collection company_capital(string $label = null)
     * @method Show\Field|Collection company_paid(string $label = null)
     * @method Show\Field|Collection Established_at(string $label = null)
     * @method Show\Field|Collection operating_status(string $label = null)
     * @method Show\Field|Collection business_creditcode(string $label = null)
     * @method Show\Field|Collection business_num(string $label = null)
     * @method Show\Field|Collection organization_code(string $label = null)
     * @method Show\Field|Collection company_type(string $label = null)
     * @method Show\Field|Collection industry(string $label = null)
     * @method Show\Field|Collection approved_at(string $label = null)
     * @method Show\Field|Collection regauth(string $label = null)
     * @method Show\Field|Collection period(string $label = null)
     * @method Show\Field|Collection taxqua(string $label = null)
     * @method Show\Field|Collection regi_addr(string $label = null)
     * @method Show\Field|Collection business_scope(string $label = null)
     * @method Show\Field|Collection record_checkdate(string $label = null)
     * @method Show\Field|Collection record_chargeperson(string $label = null)
     * @method Show\Field|Collection record_code(string $label = null)
     * @method Show\Field|Collection supervision_logo(string $label = null)
     * @method Show\Field|Collection supervision_name(string $label = null)
     * @method Show\Field|Collection supervision_country(string $label = null)
     * @method Show\Field|Collection supervision_type(string $label = null)
     * @method Show\Field|Collection supervision_card_at(string $label = null)
     * @method Show\Field|Collection supervision_code(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection Introduction(string $label = null)
     * @method Show\Field|Collection check_time(string $label = null)
     * @method Show\Field|Collection is_business(string $label = null)
     * @method Show\Field|Collection is_site(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection wechat(string $label = null)
     * @method Show\Field|Collection qq(string $label = null)
     * @method Show\Field|Collection age(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
