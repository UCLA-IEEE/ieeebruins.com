BLUEHOST_USER = ieeebrui
BLUEHOST_MANAGER = ieeebruins.com

deploy-development:
	ssh $(BLUEHOST_USER)@$(BLUEHOST_MANAGER)
	cd public_html/website
	git pull
