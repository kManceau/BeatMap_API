# BeatMap

### Setup the API

---

To setup the api, follow these steps :
1. Clone this repo wherever you want.
2. Create a .env file to link it to your database.
3. In a terminal, run thoose command :
- `composer install`
- `php artisan storage:link`
- `php artisan migrate:fresh --seed`
4. Extract the images.zip in the root folder of the API.
5. Enjoy !

### ER Model

---


```mermaid
classDiagram
    class Users{
        int : user_id
        string : user_name
        string : user_email
        string : user_password
        string : user_role
        string : user_avatar
    }
    class Places{
        int : place_id
        string : place_name
        text : place_description
        string : place_address
        string : place_city
        string : place_state
        string : place_zip
        string : place_country
        float : place_latitude
        float : place_longitude
        string : place_photo
        int : place_created_by
    }
    class Events {
        int : event_id
        string : event_name
        string : event_type
        text : event_description
        date : event_start_date
        date : event_end_date
        string : event_logo
        int : event_created_by
        int : place_id
    }
    class Artists {
        int : artist_id
        string : artist_name
        text : artist_description
        string : artist_photo
        int : style_id
    }
    class Artist_Event{
        int : artist_event_id
        int : event_id
        int : artist_id
    }
    class Styles{
        int : style_id
        string : style_name
        text : style_description
    }
    Users --> Events
    Users --> Places
    Places --> Events
    Styles --> Artists
    Artists --> Artist_Event
    Events --> Artist_Event
```
