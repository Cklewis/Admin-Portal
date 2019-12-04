from django.test import TestCase, SimpleTestCase
from .models import CustomUser
from .forms import CustomUserCreationForm

# Create your tests here.
class UserModelCreationlTest(TestCase):

  def setUp(self):
    CustomUser.objects.create(
      username='test_user',
      full_name='John Smith',
      email='johnsmith@yahoo.com',
      admin_type='Global Admin'
    )

  def test_user_fields(self):
    user = CustomUser.objects.get(id=1)
    expected_user_name = f'{user.username}'
    expected_full_name = f'{user.full_name}'
    expected_email = f'{user.email}'
    expected_admin_type = f'{user.admin_type}'
    self.assertEqual(expected_user_name, 'test_user')
    self.assertEqual(expected_full_name, 'John Smith')
    self.assertEqual(expected_email, 'johnsmith@yahoo.com')
    self.assertEqual(expected_admin_type, 'Global Admin')
    
