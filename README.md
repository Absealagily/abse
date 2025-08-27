# main.py
from aiogram import Bot, Dispatcher, types
from aiogram.utils import executor
import os

TOKEN = os.environ.get("BOT_TOKEN")  # سنضيفه كمتغير بيئي لاحقًا
bot = Bot(token=TOKEN)
dp = Dispatcher(bot)

@dp.message_handler(commands=['start'])
async def send_welcome(message: types.Message):
    await message.reply("مرحباً! هذا بوت حماية تجريبي.")

@dp.message_handler()
async def echo(message: types.Message):
    await message.reply(f"لقد كتبت: {message.text}")

if __name__ == "__main__":
    executor.start_polling(dp, skip_updates=True)
