# Run diary with symfony

This is a multiuser run diary with several entries builded with symfony.

## Development setup 
### Loading mock data
For creating database using the provided entity metadata as schema and add some mock data, please run following commands: 
```
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load  
```

## Good to know
Beside the obviously existing functionality of the web app, there's a small API which allows you to fetch user data in json or csv file format.
You simply have to call:
```
/profile/<your_profile_name>/diary.json
/profile/<your_profile_name>/diary.csv
```
- Note: You've to be logged in to use this service.
