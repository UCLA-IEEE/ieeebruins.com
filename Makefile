BLUEHOST_USER = ieeebrui
BLUEHOST_HOST = ieeebruins.com

ssh:
	ssh $(BLUEHOST_USER)@$(BLUEHOST_HOST)

deploy-development:
	ssh $(BLUEHOST_USER)@$(BLUEHOST_HOST) "cd public_html/ieeebruins-development; git pull"

deploy-production:
	ssh $(BLUEHOST_USER)@$(BLUEHOST_HOST) "cd public_html/ieeebruins-production; git pull"

help:
	@echo ""
	@echo "Available Makefile targets:"
	@echo "ssh: Runs the ssh command into the server"
	@echo "deploy-development: Updates development site by pulling from GitHub"
	@echo "deploy-production: Updates production site by pulling from GitHub"
	@echo ""
