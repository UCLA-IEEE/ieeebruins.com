NAMECHEAP_USER = ieeebrui
NAMECHEAP_HOST = server187.web-hosting.com
NAMECHEAP_PORT = 21098

ssh:
	ssh $(NAMECHEAP_USER)@$(NAMECHEAP_HOST) -p $(NAMECHEAP_PORT)

deploy-development:
	ssh $(NAMECHEAP_USER)@$(NAMECHEAP_HOST) -p $(NAMECHEAP_PORT) "cd public_html/ieeebruins-development; git pull"

deploy-production:
	ssh $(NAMECHEAP_USER)@$(NAMECHEAP_HOST) -p $(NAMECHEAP_PORT) "cd public_html/ieeebruins-production; git pull"

help:
	@echo ""
	@echo "Available Makefile targets:"
	@echo "ssh: Runs the ssh command into the server"
	@echo "deploy-development: Updates development site by pulling from GitHub"
	@echo "deploy-production: Updates production site by pulling from GitHub"
	@echo ""
