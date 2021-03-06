create table photo (
    id bigserial primary key,
    path varchar(255) not null,
    name varchar(255) not null
);

create table account (
    id bigserial primary key,
    name varchar(255) not null,
    email varchar(255) not null unique,
    phone varchar(20) not null,
    password varchar(255) not null
);

create table post (
    id bigserial primary key,
    title varchar(255) not null,
    description varchar(5000) not null,
    create_date timestamp with time zone default current_timestamp,
    account_id int references account(id) not null,
    photo_id int references photo(id) not null
);

create table score (
    id bigserial primary key,
    value int not null,
    post_id int references post(id) not null,
    account_id int references account(id) not null
);

alter table score add constraint uq_postId_accountId unique (post_id, account_id);