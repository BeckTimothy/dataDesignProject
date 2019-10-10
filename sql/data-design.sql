drop table if exists downvote;
drop table if exists post;
drop table if exists user;

create table user(
   userId binary(16) not null,
   userEmail varchar(128) not null,
   index(userEmail),
   primary key(userID)
);

create table post(
   postId binary(16) not null,
   postUserId binary(16) not null,
	postContent varchar(40000) not null,
   postDate datetime(6) not null,
   postTitle varchar(255) not null,
   index(postUserId),
   foreign key(postUserId) references user(userId),
	primary key(postId)
);

create table downvote(
   downvotePostId binary(16) not null,
   downvoteUserId binary(16) not null,
   foreign key(downvotePostId) references post(postId),
   foreign key (downvoteUserId) references user(userId)
);