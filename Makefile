BLUEHOST_USER = ieeebrui
BLUEHOST_HOST = ieeebruins.com

ssh:
	ssh $(BLUEHOST_USER)@$(BLUEHOST_HOST) "cd public_html"

deploy-development:
	ssh $(BLUEHOST_USER)@$(BLUEHOST_HOST) "cd public_html/website; git pull"
