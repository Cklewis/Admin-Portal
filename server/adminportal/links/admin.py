from django.contrib import admin
from .models import Link

# Register your models here.

class LinkAdmin(admin.ModelAdmin):
  list_display = ('id','link_address' ,'link_category', 'user')
  list_display_links = ('link_address' ,'link_category', 'user')

admin.site.register(Link, LinkAdmin)

