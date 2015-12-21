install:
	$(info ********** Creating tiny-blog directory at /var/www **********)
	sudo mkdir /var/www/tiny-blog
	$(info ********** Moving files over **********)
	sudo mv * /var/www/tiny-blog

test:
	$(info Does nothing at the moment)

clean:
	$(info Does nothing at the moment)
